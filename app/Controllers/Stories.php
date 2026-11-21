<?php

namespace App\Controllers;

use App\Models\StoryModel;

class Stories extends BaseController
{
    protected StoryModel $storyModel;

    public function __construct()
    {
        $this->storyModel = new StoryModel();
    }

    public function index(): string
    {
        $stories = $this->storyModel
            ->where('status', 'published')
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('pages/stories', [
            'title'   => 'Stories & Creative Showcase - Windows The Art And Craft Corner',
            'stories' => $stories,
        ]);
    }

    public function detail(string $slug): string
    {
        $story = $this->storyModel->where('slug', $slug)->first();

        // Increment view count if story exists
        if ($story) {
            try {
                $this->storyModel->update($story['id'], [
                    'views' => ($story['views'] ?? 0) + 1,
                ]);
            } catch (\Throwable $e) {
                // Ignore view update fail
            }
        }

        // Backward compatibility for original bespoke Elementor layouts
        if ($slug === 'suhanis-artistic-journey-at-windows') {
            return view('pages/story_suhani', [
                'title' => 'Suhani’s Artistic Journey at Windows - WinArtCraft',
                'story' => $story,
            ]);
        }

        if ($slug === 'amaras-creative-journey' || $slug === '235-2') {
            return view('pages/story_amara', [
                'title' => 'A Journey of Creativity: Amara’s Story at Windows - WinArtCraft',
                'story' => $story,
            ]);
        }

        if (!$story) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Story not found: {$slug}");
        }

        $relatedStories = $this->storyModel
            ->where('status', 'published')
            ->where('id !=', $story['id'])
            ->orderBy('created_at', 'DESC')
            ->findAll(3);

        return view('pages/story_detail', [
            'title'          => esc($story['title']) . ' - WinArtCraft Stories',
            'story'          => $story,
            'relatedStories' => $relatedStories,
        ]);
    }
}
