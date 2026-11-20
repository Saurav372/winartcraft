<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\InquiryModel;
use App\Models\StoryModel;
use App\Models\ServiceModel;
use App\Models\TestimonialModel;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $inquiryModel = new InquiryModel();
        $storyModel = new StoryModel();
        $serviceModel = new ServiceModel();
        $testimonialModel = new TestimonialModel();

        $stats = [
            'total_inquiries'  => $inquiryModel->countAllResults(),
            'unread_inquiries' => $inquiryModel->where('status', 'unread')->countAllResults(),
            'total_stories'    => $storyModel->countAllResults(),
            'total_services'   => $serviceModel->countAllResults(),
            'total_reviews'    => $testimonialModel->countAllResults(),
        ];

        $recentInquiries = $inquiryModel->orderBy('created_at', 'DESC')->findAll(5);
        $recentStories = $storyModel->orderBy('created_at', 'DESC')->findAll(5);

        return view('admin/dashboard/index', [
            'title'           => 'Dashboard Overview - WinArtCraft Admin',
            'active_nav'      => 'dashboard',
            'stats'           => $stats,
            'recentInquiries' => $recentInquiries,
            'recentStories'   => $recentStories,
        ]);
    }
}
