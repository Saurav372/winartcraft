<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\InquiryModel;

class InquiriesController extends BaseController
{
    protected InquiryModel $inquiryModel;

    public function __construct()
    {
        $this->inquiryModel = new InquiryModel();
    }

    public function index()
    {
        $inquiries = $this->inquiryModel->orderBy('created_at', 'DESC')->findAll();

        return view('admin/inquiries/index', [
            'title'      => 'Contact Inquiries - WinArtCraft Admin',
            'active_nav' => 'inquiries',
            'inquiries'  => $inquiries,
        ]);
    }

    public function view($id)
    {
        $inquiry = $this->inquiryModel->find($id);
        if (!$inquiry) {
            return redirect()->to(base_url('admin/inquiries'))->with('error', 'Inquiry not found.');
        }

        // Mark as read if currently unread
        if ($inquiry['status'] === 'unread') {
            $this->inquiryModel->update($id, ['status' => 'read']);
            $inquiry['status'] = 'read';
        }

        return view('admin/inquiries/view', [
            'title'      => 'View Inquiry - WinArtCraft Admin',
            'active_nav' => 'inquiries',
            'inquiry'    => $inquiry,
        ]);
    }

    public function delete($id)
    {
        $inquiry = $this->inquiryModel->find($id);
        if (!$inquiry) {
            return redirect()->to(base_url('admin/inquiries'))->with('error', 'Inquiry not found.');
        }

        $this->inquiryModel->delete($id);
        return redirect()->to(base_url('admin/inquiries'))->with('success', 'Inquiry deleted successfully.');
    }
}
