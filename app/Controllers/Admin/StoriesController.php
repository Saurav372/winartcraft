<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\StoryModel;

class StoriesController extends BaseController
{
    protected StoryModel $storyModel;

    public function __construct()
    {
        $this->storyModel = new StoryModel();
    }

    public function index()
    {
        $stories = $this->storyModel->orderBy('created_at', 'DESC')->findAll();

        return view('admin/stories/index', [
            'title'      => 'Stories Management - WinArtCraft Admin',
            'active_nav' => 'stories',
            'stories'    => $stories,
        ]);
    }

    public function create()
    {
        return view('admin/stories/create', [
            'title'      => 'Create New Story - WinArtCraft Admin',
            'active_nav' => 'stories',
        ]);
    }

    public function store()
    {
        $title = trim($this->request->getPost('title') ?? '');
        $slug = trim($this->request->getPost('slug') ?? '');
        $excerpt = trim($this->request->getPost('excerpt') ?? '');
        $content = $this->request->getPost('content') ?? '';
        $featured_image = trim($this->request->getPost('featured_image') ?? '');
        $category = trim($this->request->getPost('category') ?? 'Student Journey');
        $status = $this->request->getPost('status') ?? 'published';

        if (empty($title)) {
            return redirect()->back()->withInput()->with('error', 'Story title is required.');
        }

        if (empty($slug)) {
            $slug = url_title($title, '-', true);
        }

        // Check if slug exists
        if ($this->storyModel->where('slug', $slug)->first()) {
            $slug .= '-' . time();
        }

        // Handle image upload if provided
        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $targetDir = FCPATH . 'assets/uploads/2026/stories/';
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0775, true);
            }
            $file->move($targetDir, $newName);
            $featured_image = 'assets/uploads/2026/stories/' . $newName;
        }

        $this->storyModel->insert([
            'title'          => $title,
            'slug'           => $slug,
            'category'       => $category,
            'excerpt'        => $excerpt,
            'content'        => $content,
            'featured_image' => $featured_image ?: 'assets/uploads/2025/03/window.jpg',
            'status'         => $status,
            'views'          => 0,
        ]);

        return redirect()->to(base_url('admin/stories'))->with('success', 'Story published successfully!');
    }

    public function edit($id)
    {
        $story = $this->storyModel->find($id);
        if (!$story) {
            return redirect()->to(base_url('admin/stories'))->with('error', 'Story not found.');
        }

        return view('admin/stories/edit', [
            'title'      => 'Edit Story - WinArtCraft Admin',
            'active_nav' => 'stories',
            'story'      => $story,
        ]);
    }

    public function update($id)
    {
        $story = $this->storyModel->find($id);
        if (!$story) {
            return redirect()->to(base_url('admin/stories'))->with('error', 'Story not found.');
        }

        $title = trim($this->request->getPost('title') ?? '');
        $slug = trim($this->request->getPost('slug') ?? '');
        $excerpt = trim($this->request->getPost('excerpt') ?? '');
        $content = $this->request->getPost('content') ?? '';
        $featured_image = trim($this->request->getPost('featured_image') ?? '');
        $category = trim($this->request->getPost('category') ?? 'Student Journey');
        $status = $this->request->getPost('status') ?? 'published';

        if (empty($title)) {
            return redirect()->back()->withInput()->with('error', 'Story title is required.');
        }

        if (empty($slug)) {
            $slug = url_title($title, '-', true);
        }

        // Handle file upload
        $file = $this->request->getFile('image_file');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $targetDir = FCPATH . 'assets/uploads/2026/stories/';
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0775, true);
            }
            $file->move($targetDir, $newName);
            $featured_image = 'assets/uploads/2026/stories/' . $newName;
        }

        $this->storyModel->update($id, [
            'title'          => $title,
            'slug'           => $slug,
            'category'       => $category,
            'excerpt'        => $excerpt,
            'content'        => $content,
            'featured_image' => $featured_image ?: $story['featured_image'],
            'status'         => $status,
        ]);

        return redirect()->to(base_url('admin/stories'))->with('success', 'Story updated successfully!');
    }

    public function delete($id)
    {
        $story = $this->storyModel->find($id);
        if (!$story) {
            return redirect()->to(base_url('admin/stories'))->with('error', 'Story not found.');
        }

        $this->storyModel->delete($id);
        return redirect()->to(base_url('admin/stories'))->with('success', 'Story deleted successfully.');
    }
}
