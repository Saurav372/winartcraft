<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ServiceModel;

class ServicesController extends BaseController
{
    protected ServiceModel $serviceModel;

    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
    }

    public function index()
    {
        $services = $this->serviceModel->orderBy('display_order', 'ASC')->findAll();

        return view('admin/services/index', [
            'title'      => 'Services & Workshops - WinArtCraft Admin',
            'active_nav' => 'services',
            'services'   => $services,
        ]);
    }

    public function create()
    {
        return view('admin/services/create', [
            'title'      => 'Add Workshop / Service - WinArtCraft Admin',
            'active_nav' => 'services',
        ]);
    }

    public function store()
    {
        $title = trim($this->request->getPost('title') ?? '');
        $category = $this->request->getPost('category') ?? 'Workshop';
        $time_slot = trim($this->request->getPost('time_slot') ?? '');
        $description = trim($this->request->getPost('description') ?? '');
        $display_order = (int)($this->request->getPost('display_order') ?? 0);
        $image = trim($this->request->getPost('image') ?? '');

        if (empty($title)) {
            return redirect()->back()->withInput()->with('error', 'Title is required.');
        }

        // Handle image upload if provided
        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $targetDir = FCPATH . 'assets/uploads/2026/services/';
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0775, true);
            }
            $file->move($targetDir, $newName);
            $image = 'assets/uploads/2026/services/' . $newName;
        }

        $this->serviceModel->insert([
            'title'         => $title,
            'category'      => $category,
            'time_slot'     => $time_slot,
            'description'   => $description,
            'display_order' => $display_order,
            'image'         => $image ?: 'assets/uploads/2025/03/window.jpg',
        ]);

        return redirect()->to(base_url('admin/services'))->with('success', 'Workshop/Service added successfully!');
    }

    public function edit($id)
    {
        $service = $this->serviceModel->find($id);
        if (!$service) {
            return redirect()->to(base_url('admin/services'))->with('error', 'Service not found.');
        }

        return view('admin/services/edit', [
            'title'      => 'Edit Service / Workshop - WinArtCraft Admin',
            'active_nav' => 'services',
            'service'    => $service,
        ]);
    }

    public function update($id)
    {
        $service = $this->serviceModel->find($id);
        if (!$service) {
            return redirect()->to(base_url('admin/services'))->with('error', 'Service not found.');
        }

        $title = trim($this->request->getPost('title') ?? '');
        $category = $this->request->getPost('category') ?? 'Workshop';
        $time_slot = trim($this->request->getPost('time_slot') ?? '');
        $description = trim($this->request->getPost('description') ?? '');
        $display_order = (int)($this->request->getPost('display_order') ?? 0);
        $image = trim($this->request->getPost('image') ?? '');

        if (empty($title)) {
            return redirect()->back()->withInput()->with('error', 'Title is required.');
        }

        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $targetDir = FCPATH . 'assets/uploads/2026/services/';
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0775, true);
            }
            $file->move($targetDir, $newName);
            $image = 'assets/uploads/2026/services/' . $newName;
        }

        $this->serviceModel->update($id, [
            'title'         => $title,
            'category'      => $category,
            'time_slot'     => $time_slot,
            'description'   => $description,
            'display_order' => $display_order,
            'image'         => $image ?: $service['image'],
        ]);

        return redirect()->to(base_url('admin/services'))->with('success', 'Service updated successfully!');
    }

    public function delete($id)
    {
        $service = $this->serviceModel->find($id);
        if (!$service) {
            return redirect()->to(base_url('admin/services'))->with('error', 'Service not found.');
        }

        $this->serviceModel->delete($id);
        return redirect()->to(base_url('admin/services'))->with('success', 'Service deleted successfully.');
    }
}
