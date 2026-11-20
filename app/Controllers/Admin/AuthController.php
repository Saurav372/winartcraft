<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AuthController extends BaseController
{
    public function login()
    {
        if (session()->get('admin_logged_in')) {
            return redirect()->to(base_url('admin'));
        }

        return view('admin/auth/login', [
            'title' => 'Admin Login - WinArtCraft',
        ]);
    }

    public function processLogin()
    {
        $email = trim($this->request->getPost('email') ?? '');
        $password = $this->request->getPost('password') ?? '';

        if (empty($email) || empty($password)) {
            return redirect()->back()->withInput()->with('error', 'Please provide both email and password.');
        }

        $adminModel = new AdminModel();
        $admin = $adminModel->findByEmail($email);

        if (!$admin || !password_verify($password, $admin['password'])) {
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }

        session()->set([
            'admin_id'        => $admin['id'],
            'admin_name'      => $admin['name'],
            'admin_email'     => $admin['email'],
            'admin_role'      => $admin['role'],
            'admin_logged_in' => true,
        ]);

        return redirect()->to(base_url('admin'))->with('success', "Welcome back, {$admin['name']}!");
    }

    public function logout()
    {
        session()->remove(['admin_id', 'admin_name', 'admin_email', 'admin_role', 'admin_logged_in']);
        session()->destroy();

        return redirect()->to(base_url('admin/login'))->with('success', 'You have been logged out successfully.');
    }
}
