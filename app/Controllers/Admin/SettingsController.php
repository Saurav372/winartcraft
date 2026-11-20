<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\AdminModel;

class SettingsController extends BaseController
{
    protected SettingModel $settingModel;
    protected AdminModel $adminModel;

    public function __construct()
    {
        $this->settingModel = new SettingModel();
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        $allSettings = $this->settingModel->findAll();
        $settings = [];
        foreach ($allSettings as $s) {
            $settings[$s['key']] = $s['value'];
        }

        $admin = $this->adminModel->find(session()->get('admin_id'));

        return view('admin/settings/index', [
            'title'      => 'General Settings - WinArtCraft Admin',
            'active_nav' => 'settings',
            'settings'   => $settings,
            'admin'      => $admin,
        ]);
    }

    public function update()
    {
        $keys = [
            'site_title',
            'contact_email',
            'contact_phone',
            'studio_address',
            'instagram_url',
            'facebook_url',
            'youtube_url',
        ];

        foreach ($keys as $key) {
            $val = $this->request->getPost($key);
            if ($val !== null) {
                $this->settingModel->setVal($key, trim($val));
            }
        }

        // Check if admin updated profile or password
        $adminId = session()->get('admin_id');
        $adminName = trim($this->request->getPost('admin_name') ?? '');
        $newPassword = $this->request->getPost('new_password');

        if ($adminId && !empty($adminName)) {
            $updateData = ['name' => $adminName];
            if (!empty($newPassword)) {
                if (strlen($newPassword) < 6) {
                    return redirect()->back()->with('error', 'New password must be at least 6 characters.');
                }
                $updateData['password'] = password_hash($newPassword, PASSWORD_DEFAULT);
            }
            $this->adminModel->update($adminId, $updateData);
            session()->set('admin_name', $adminName);
        }

        return redirect()->to(base_url('admin/settings'))->with('success', 'Settings updated successfully!');
    }
}
