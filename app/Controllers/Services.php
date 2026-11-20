<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index(): string
    {
        return view('pages/services', [
            'title' => 'Services - Windows The Art And Craft Corner',
        ]);
    }
}
