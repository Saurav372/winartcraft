<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Primary Frontend Pages
$routes->get('/', 'Home::index');
$routes->get('about-us', 'About::index');
$routes->get('services', 'Services::index');
$routes->get('stories', 'Stories::index');
$routes->get('stories/(:segment)', 'Stories::detail/$1');

// WordPress Compatibility Redirects
$routes->get('suhanis-artistic-journey-at-windows', static function () {
    return redirect()->to('/stories/suhanis-artistic-journey-at-windows', 301);
});
$routes->get('235-2', static function () {
    return redirect()->to('/stories/amaras-creative-journey', 301);
});

// Frontend Contact Form Submission
$routes->post('contact/send', 'Contact::send');

// ==========================================
// ADMIN CONTROL PANEL
// ==========================================

// Authentication
$routes->get('admin/login', 'Admin\AuthController::login');
$routes->post('admin/login', 'Admin\AuthController::processLogin');
$routes->get('admin/logout', 'Admin\AuthController::logout');

// Protected Admin Routes
$routes->group('admin', ['filter' => 'admin_auth'], static function ($routes) {
    // Dashboard
    $routes->get('/', 'Admin\DashboardController::index');

    // Inquiries
    $routes->get('inquiries', 'Admin\InquiriesController::index');
    $routes->get('inquiries/view/(:num)', 'Admin\InquiriesController::view/$1');
    $routes->get('inquiries/delete/(:num)', 'Admin\InquiriesController::delete/$1');

    // Stories / Blog Management
    $routes->get('stories', 'Admin\StoriesController::index');
    $routes->get('stories/create', 'Admin\StoriesController::create');
    $routes->post('stories/store', 'Admin\StoriesController::store');
    $routes->get('stories/edit/(:num)', 'Admin\StoriesController::edit/$1');
    $routes->post('stories/update/(:num)', 'Admin\StoriesController::update/$1');
    $routes->get('stories/delete/(:num)', 'Admin\StoriesController::delete/$1');

    // Services / Workshops Management
    $routes->get('services', 'Admin\ServicesController::index');
    $routes->get('services/create', 'Admin\ServicesController::create');
    $routes->post('services/store', 'Admin\ServicesController::store');
    $routes->get('services/edit/(:num)', 'Admin\ServicesController::edit/$1');
    $routes->post('services/update/(:num)', 'Admin\ServicesController::update/$1');
    $routes->get('services/delete/(:num)', 'Admin\ServicesController::delete/$1');

    // Testimonials
    $routes->get('testimonials', 'Admin\TestimonialsController::index');
    $routes->get('testimonials/create', 'Admin\TestimonialsController::create');
    $routes->post('testimonials/store', 'Admin\TestimonialsController::store');
    $routes->get('testimonials/edit/(:num)', 'Admin\TestimonialsController::edit/$1');
    $routes->post('testimonials/update/(:num)', 'Admin\TestimonialsController::update/$1');
    $routes->get('testimonials/delete/(:num)', 'Admin\TestimonialsController::delete/$1');

    // General Settings
    $routes->get('settings', 'Admin\SettingsController::index');
    $routes->post('settings/update', 'Admin\SettingsController::update');
});
