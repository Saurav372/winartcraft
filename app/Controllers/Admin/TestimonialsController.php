<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TestimonialModel;

class TestimonialsController extends BaseController
{
    protected TestimonialModel $testimonialModel;

    public function __construct()
    {
        $this->testimonialModel = new TestimonialModel();
    }

    public function index()
    {
        $testimonials = $this->testimonialModel->orderBy('created_at', 'DESC')->findAll();

        return view('admin/testimonials/index', [
            'title'        => 'Parent Testimonials - WinArtCraft Admin',
            'active_nav'   => 'testimonials',
            'testimonials' => $testimonials,
        ]);
    }

    public function create()
    {
        return view('admin/testimonials/create', [
            'title'      => 'Add Testimonial - WinArtCraft Admin',
            'active_nav' => 'testimonials',
        ]);
    }

    public function store()
    {
        $parent_name = trim($this->request->getPost('parent_name') ?? '');
        $child_info = trim($this->request->getPost('child_info') ?? '');
        $review = trim($this->request->getPost('review') ?? '');
        $rating = (int)($this->request->getPost('rating') ?? 5);
        $status = $this->request->getPost('status') ?? 'active';

        if (empty($parent_name) || empty($review)) {
            return redirect()->back()->withInput()->with('error', 'Parent name and review text are required.');
        }

        $this->testimonialModel->insert([
            'parent_name' => $parent_name,
            'child_info'  => $child_info,
            'review'      => $review,
            'rating'      => $rating,
            'status'      => $status,
        ]);

        return redirect()->to(base_url('admin/testimonials'))->with('success', 'Testimonial added successfully!');
    }

    public function edit($id)
    {
        $testimonial = $this->testimonialModel->find($id);
        if (!$testimonial) {
            return redirect()->to(base_url('admin/testimonials'))->with('error', 'Testimonial not found.');
        }

        return view('admin/testimonials/edit', [
            'title'       => 'Edit Testimonial - WinArtCraft Admin',
            'active_nav'  => 'testimonials',
            'testimonial' => $testimonial,
        ]);
    }

    public function update($id)
    {
        $testimonial = $this->testimonialModel->find($id);
        if (!$testimonial) {
            return redirect()->to(base_url('admin/testimonials'))->with('error', 'Testimonial not found.');
        }

        $parent_name = trim($this->request->getPost('parent_name') ?? '');
        $child_info = trim($this->request->getPost('child_info') ?? '');
        $review = trim($this->request->getPost('review') ?? '');
        $rating = (int)($this->request->getPost('rating') ?? 5);
        $status = $this->request->getPost('status') ?? 'active';

        if (empty($parent_name) || empty($review)) {
            return redirect()->back()->withInput()->with('error', 'Parent name and review text are required.');
        }

        $this->testimonialModel->update($id, [
            'parent_name' => $parent_name,
            'child_info'  => $child_info,
            'review'      => $review,
            'rating'      => $rating,
            'status'      => $status,
        ]);

        return redirect()->to(base_url('admin/testimonials'))->with('success', 'Testimonial updated successfully!');
    }

    public function delete($id)
    {
        $testimonial = $this->testimonialModel->find($id);
        if (!$testimonial) {
            return redirect()->to(base_url('admin/testimonials'))->with('error', 'Testimonial not found.');
        }

        $this->testimonialModel->delete($id);
        return redirect()->to(base_url('admin/testimonials'))->with('success', 'Testimonial deleted successfully.');
    }
}
