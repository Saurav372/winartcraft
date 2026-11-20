<?php

namespace App\Controllers;

class Stories extends BaseController
{
    public function index(): string
    {
        return view('pages/stories', [
            'title' => 'Stories - Windows The Art And Craft Corner',
        ]);
    }

    public function detail(string $slug): string
    {
        if ($slug === 'suhanis-artistic-journey-at-windows') {
            return view('pages/story_suhani', [
                'title' => 'Suhani’s Artistic Journey at Windows - WinArtCraft',
            ]);
        }

        if ($slug === 'amaras-creative-journey' || $slug === '235-2') {
            return view('pages/story_amara', [
                'title' => 'A Journey of Creativity: Amara’s Story at Windows - WinArtCraft',
            ]);
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Story not found: {$slug}");
    }
}
