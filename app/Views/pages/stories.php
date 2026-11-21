<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/post-126.css') ?>" />
<style>
    /* Modern Showcase & Stories Styles */
    .showcase-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px 80px;
    }

    /* Featured Hero Spotlight (Assembly Inspiration) */
    .featured-spotlight-card {
        background: #ffffff;
        border-radius: 20px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        margin-bottom: 50px;
        display: grid;
        grid-template-columns: 1.15fr 1fr;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .featured-spotlight-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.12);
    }
    .featured-media-box {
        position: relative;
        overflow: hidden;
        min-height: 380px;
    }
    .featured-media-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .featured-spotlight-card:hover .featured-media-box img {
        transform: scale(1.04);
    }
    .featured-spotlight-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: rgba(15, 23, 42, 0.85);
        backdrop-filter: blur(8px);
        color: #ffffff;
        font-size: 12px;
        font-weight: 700;
        padding: 6px 14px;
        border-radius: 9999px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }
    .featured-content-box {
        padding: 48px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .featured-meta {
        display: flex;
        align-items: center;
        gap: 14px;
        font-size: 13px;
        color: #64748b;
        margin-bottom: 14px;
    }
    .featured-meta .meta-tag {
        background: #eff6ff;
        color: #2563eb;
        font-weight: 600;
        padding: 3px 10px;
        border-radius: 6px;
    }
    .featured-title {
        font-size: 30px;
        font-weight: 700;
        color: #0f172a;
        line-height: 1.3;
        margin-bottom: 16px;
    }
    .featured-excerpt {
        font-size: 16px;
        color: #475569;
        line-height: 1.7;
        margin-bottom: 24px;
    }
    .btn-featured-read {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        align-self: flex-start;
        background: #2563eb;
        color: #ffffff;
        padding: 12px 24px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        transition: background 0.2s, transform 0.2s;
    }
    .btn-featured-read:hover {
        background: #1d4ed8;
        transform: translateX(3px);
        color: #ffffff;
    }

    /* Filter Pills Navigation (Canva Inspiration) */
    .showcase-filters {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }
    .filter-pill {
        padding: 10px 22px;
        border-radius: 9999px;
        border: 1px solid #e2e8f0;
        background: #ffffff;
        color: #475569;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
    }
    .filter-pill:hover {
        background: #f1f5f9;
        color: #0f172a;
    }
    .filter-pill.active {
        background: #0f172a;
        color: #ffffff;
        border-color: #0f172a;
    }

    /* 3-Column Stories Grid (Contra Inspiration) */
    .stories-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    .story-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        text-decoration: none;
    }
    .story-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 25px -8px rgba(0, 0, 0, 0.08);
    }
    .story-card-thumb-wrap {
        position: relative;
        width: 100%;
        height: 220px;
        overflow: hidden;
        background: #f1f5f9;
    }
    .story-card-thumb-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .story-card:hover .story-card-thumb-wrap img {
        transform: scale(1.06);
    }
    .story-card-badge {
        position: absolute;
        top: 14px;
        left: 14px;
        background: rgba(15, 23, 42, 0.8);
        backdrop-filter: blur(4px);
        color: #ffffff;
        font-size: 11px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 6px;
    }
    .story-card-body {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .story-card-meta {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 13px;
        color: #94a3b8;
        margin-bottom: 10px;
    }
    .story-card-title {
        font-size: 19px;
        font-weight: 700;
        color: #0f172a;
        line-height: 1.35;
        margin-bottom: 10px;
        transition: color 0.2s;
    }
    .story-card:hover .story-card-title {
        color: #2563eb;
    }
    .story-card-excerpt {
        font-size: 14px;
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .story-card-footer {
        margin-top: auto;
        padding-top: 16px;
        border-top: 1px solid #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .story-card-author {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .story-card-avatar {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        object-fit: cover;
    }
    .story-card-author-name {
        font-size: 13px;
        font-weight: 600;
        color: #334155;
    }
    .story-card-read-link {
        font-size: 13px;
        font-weight: 600;
        color: #2563eb;
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }

    @media (max-width: 992px) {
        .featured-spotlight-card {
            grid-template-columns: 1fr;
        }
        .featured-media-box {
            min-height: 260px;
        }
        .featured-content-box {
            padding: 30px;
        }
        .stories-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .stories-grid {
            grid-template-columns: 1fr;
        }
        .featured-title {
            font-size: 24px;
        }
        .showcase-wrapper {
            padding: 20px 16px 60px;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div data-elementor-type="wp-page" data-elementor-id="126" class="elementor elementor-126" data-elementor-post-type="page">
    
    <!-- Top Studio Banner -->
    <div class="elementor-element elementor-element-2fb801de e-flex e-con-boxed e-con e-parent" data-id="2fb801de" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-427c8402 e-con-full e-flex e-con e-child" data-id="427c8402" data-element_type="container">
                <div class="elementor-element elementor-element-430028ad elementor-widget elementor-widget-heading" data-id="430028ad" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Discover Your Passion</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-45771536 elementor-widget elementor-widget-text-editor" data-id="45771536" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Welcome to WinArtCraft! Here, imagination knows no bounds. Dive into a space where children create, explore, and learn through art. Our classes not only develop artistic skills but also build confidence and character in your little ones. Join us and see how creativity can shape their futures!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Art Showcase Section -->
    <div class="elementor-element elementor-element-39ec59e e-flex e-con-boxed e-con e-parent" data-id="39ec59e" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-26dd1d36 e-con-full e-flex e-con e-child" data-id="26dd1d36" data-element_type="container">
                <div class="elementor-element elementor-element-52a71b76 elementor-widget elementor-widget-heading" data-id="52a71b76" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Art Showcase</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7ff21631 elementor-widget elementor-widget-heading" data-id="7ff21631" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h5 class="elementor-heading-title elementor-size-default">Discover the creativity of our young artists through their vibrant works. Each piece tells a unique story and reflects their growth.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modern Showcase Body (Mobbin Design) -->
    <div class="showcase-wrapper">

        <?php if (!empty($stories)): ?>
            <?php $featured = $stories[0]; ?>

            <!-- 1. Hero Featured Spotlight Card (Assembly Inspiration) -->
            <div class="featured-spotlight-card">
                <div class="featured-media-box">
                    <img src="<?= base_url($featured['featured_image'] ?: 'assets/uploads/2025/03/Creative-art-4-298x300.jpg') ?>" alt="<?= esc($featured['title']) ?>">
                    <div class="featured-spotlight-badge">★ Spotlight Story</div>
                </div>
                <div class="featured-content-box">
                    <div class="featured-meta">
                        <span class="meta-tag"><?= esc($featured['category'] ?? 'Student Journey') ?></span>
                        <span><?= !empty($featured['created_at']) ? date('F j, Y', strtotime($featured['created_at'])) : 'March 23, 2025' ?></span>
                        <span>&bull; 3 min read</span>
                    </div>
                    <h3 class="featured-title">
                        <a href="<?= base_url('stories/' . $featured['slug']) ?>" style="color: inherit; text-decoration: none;">
                            <?= esc($featured['title']) ?>
                        </a>
                    </h3>
                    <p class="featured-excerpt">
                        <?= esc($featured['excerpt'] ?: strip_tags(substr($featured['content'] ?? '', 0, 180)) . '...') ?>
                    </p>
                    <a href="<?= base_url('stories/' . $featured['slug']) ?>" class="btn-featured-read">
                        Read Featured Story 
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <?php
                // Count stories per category
                $catCounts = [
                    'all' => count($stories),
                    'student-journey' => 0,
                    'art-and-craft' => 0,
                    'exhibition' => 0,
                    'workshop' => 0,
                ];
                foreach ($stories as $st) {
                    $c = strtolower(str_replace([' ', '&'], ['-', 'and'], $st['category'] ?? 'student-journey'));
                    if (isset($catCounts[$c])) {
                        $catCounts[$c]++;
                    } else {
                        $catCounts[$c] = 1;
                    }
                }
            ?>

            <!-- 2. Interactive Category Filter Pills (Canva Inspiration) -->
            <div class="showcase-filters">
                <button type="button" class="filter-pill active" onclick="filterStories('all', this)">All Stories (<?= $catCounts['all'] ?>)</button>
                <button type="button" class="filter-pill" onclick="filterStories('student-journey', this)">Student Journeys (<?= $catCounts['student-journey'] ?>)</button>
                <button type="button" class="filter-pill" onclick="filterStories('art-and-craft', this)">Art &amp; Craft (<?= $catCounts['art-and-craft'] ?>)</button>
                <button type="button" class="filter-pill" onclick="filterStories('exhibition', this)">Exhibitions (<?= $catCounts['exhibition'] ?>)</button>
                <?php if (!empty($catCounts['workshop'])): ?>
                    <button type="button" class="filter-pill" onclick="filterStories('workshop', this)">Workshops (<?= $catCounts['workshop'] ?>)</button>
                <?php endif; ?>
            </div>

            <!-- 3. Responsive 3-Column Stories Grid (Contra Inspiration) -->
            <div class="stories-grid">
                <?php foreach ($stories as $index => $item): 
                    $catSlug = strtolower(str_replace([' ', '&'], ['-', 'and'], $item['category'] ?? 'student-journey'));
                ?>
                    <article class="story-card" data-category="<?= esc($catSlug) ?>">
                        <div class="story-card-thumb-wrap">
                            <img src="<?= base_url($item['featured_image'] ?: 'assets/uploads/2025/03/window.jpg') ?>" alt="<?= esc($item['title']) ?>" loading="lazy">
                            <div class="story-card-badge"><?= esc($item['category'] ?? 'Student Journey') ?></div>
                        </div>
                        <div class="story-card-body">
                            <div class="story-card-meta">
                                <span><?= !empty($item['created_at']) ? date('M j, Y', strtotime($item['created_at'])) : 'March 2025' ?></span>
                                <span>&bull;</span>
                                <span><?= (int)($item['views'] ?? 1) + 10 ?> views</span>
                            </div>
                            <h3 class="story-card-title"><?= esc($item['title']) ?></h3>
                            <p class="story-card-excerpt">
                                <?= esc($item['excerpt'] ?: strip_tags(substr($item['content'] ?? '', 0, 140)) . '...') ?>
                            </p>
                            <div class="story-card-footer">
                                <div class="story-card-author">
                                    <img src="<?= base_url('assets/uploads/2025/03/cropped-Windows-Favicon-32x32.png') ?>" alt="Windows Art" class="story-card-avatar">
                                    <span class="story-card-author-name">Windows Art</span>
                                </div>
                                <span class="story-card-read-link">
                                    Read Story &rarr;
                                </span>
                            </div>
                        </div>
                        <a href="<?= base_url('stories/' . $item['slug']) ?>" style="position: absolute; inset: 0;" aria-label="<?= esc($item['title']) ?>"></a>
                    </article>
                <?php endforeach; ?>
            </div>

        <?php else: ?>
            <div style="text-align: center; padding: 60px 20px;">
                <p style="font-size: 18px; color: #64748b;">No stories published yet. Check back soon!</p>
            </div>
        <?php endif; ?>

    </div>

    <!-- Bottom Call To Action Banner -->
    <div class="elementor-element elementor-element-2c974e48 e-flex e-con-boxed e-con e-parent" data-id="2c974e48" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-68f9f90 e-flex e-con-boxed e-con e-child" data-id="68f9f90" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-3c2a1723 elementor-widget elementor-widget-heading" data-id="3c2a1723" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default">Sign Up Today! Unleash Creativity!</h4>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2572fb20 elementor-widget__width-auto elementor-align-right elementor-widget elementor-widget-button" data-id="2572fb20" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="<?= base_url('/#contact') ?>">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Join Us!</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function filterStories(category, btn) {
    document.querySelectorAll('.filter-pill').forEach(el => el.classList.remove('active'));
    btn.classList.add('active');

    const cards = document.querySelectorAll('.story-card');
    cards.forEach(card => {
        if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>
<?= $this->endSection() ?>
