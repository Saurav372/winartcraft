<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        return view('pages/about', [
            'title' => 'About Us - Windows The Art And Craft Corner',
        ]);
    }
}
