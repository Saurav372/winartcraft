<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
<style>
    .story-single-hero {
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        padding: 60px 20px 40px;
        text-align: center;
        border-bottom: 1px solid #e2e8f0;
    }
    .story-single-container {
        max-width: 860px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .story-breadcrumb {
        font-size: 14px;
        color: #64748b;
        margin-bottom: 20px;
    }
    .story-breadcrumb a {
        color: #2563eb;
        text-decoration: none;
    }
    .story-single-badge {
        display: inline-block;
        background: #eff6ff;
        color: #2563eb;
        font-size: 13px;
        font-weight: 600;
        padding: 5px 14px;
        border-radius: 9999px;
        margin-bottom: 16px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .story-single-title {
        font-size: 38px;
        font-weight: 700;
        color: #0f172a;
        line-height: 1.25;
        margin-bottom: 18px;
    }
    .story-single-meta {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        font-size: 14px;
        color: #64748b;
        flex-wrap: wrap;
    }
    .story-single-meta span {
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }
    .story-featured-media {
        max-width: 960px;
        margin: 40px auto 50px;
        padding: 0 20px;
        text-align: center;
    }
    .story-featured-media img {
        width: 100%;
        max-height: 540px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
    }
    .story-body {
        max-width: 800px;
        margin: 0 auto 60px;
        padding: 0 20px;
        font-size: 17px;
        line-height: 1.8;
        color: #334155;
    }
    .story-body p {
        margin-bottom: 24px;
    }
    .story-body h2, .story-body h3 {
        color: #0f172a;
        margin-top: 36px;
        margin-bottom: 16px;
        font-weight: 700;
    }
    .story-body img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 20px 0;
    }
    .story-author-box {
        max-width: 800px;
        margin: 0 auto 60px;
        padding: 28px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        display: flex;
        gap: 24px;
        align-items: center;
    }
    .story-author-avatar {
        width: 84px;
        height: 84px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #ffffff;
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        flex-shrink: 0;
    }
    .story-author-info h4 {
        font-size: 18px;
        color: #0f172a;
        margin-bottom: 4px;
    }
    .story-author-info p {
        font-size: 14px;
        color: #64748b;
        line-height: 1.5;
        margin: 0;
    }
    .story-related {
        background: #f8fafc;
        padding: 60px 20px;
        border-top: 1px solid #e2e8f0;
    }
    .story-related-container {
        max-width: 1140px;
        margin: 0 auto;
    }
    .story-related-header {
        text-align: center;
        margin-bottom: 40px;
    }
    .story-related-header h3 {
        font-size: 28px;
        font-weight: 700;
        color: #0f172a;
    }
    .story-related-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 28px;
    }
    .story-related-card {
        background: #ffffff;
        border-radius: 14px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        transition: transform 0.25s, box-shadow 0.25s;
        text-decoration: none;
        display: flex;
        flex-direction: column;
    }
    .story-related-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 20px -5px rgba(0,0,0,0.1);
    }
    .story-related-img {
        width: 100%;
        height: 190px;
        object-fit: cover;
    }
    .story-related-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .story-related-title {
        font-size: 17px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 8px;
        line-height: 1.4;
    }
    .story-related-date {
        font-size: 13px;
        color: #94a3b8;
        margin-top: auto;
    }
    @media (max-width: 768px) {
        .story-single-title {
            font-size: 28px;
        }
        .story-author-box {
            flex-direction: column;
            text-align: center;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<article>
    <div class="story-single-hero">
        <div class="story-single-container">
            <div class="story-breadcrumb">
                <a href="<?= base_url('/') ?>">Home</a> &rsaquo; 
                <a href="<?= base_url('stories') ?>">Stories</a> &rsaquo; 
                <span><?= esc($story['title']) ?></span>
            </div>

            <div class="story-single-badge">Creative Showcase</div>
            <h1 class="story-single-title"><?= esc($story['title']) ?></h1>

            <div class="story-single-meta">
                <span>
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <?= !empty($story['created_at']) ? date('F j, Y', strtotime($story['created_at'])) : date('F j, Y') ?>
                </span>
                <span>
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    <?= (int)($story['views'] ?? 1) + 12 ?> views
                </span>
                <span>
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    3 min read
                </span>
            </div>
        </div>
    </div>

    <?php if (!empty($story['featured_image'])): ?>
        <div class="story-featured-media">
            <img src="<?= base_url($story['featured_image']) ?>" alt="<?= esc($story['title']) ?>">
        </div>
    <?php endif; ?>

    <div class="story-body">
        <?php if (!empty($story['excerpt'])): ?>
            <p style="font-size: 20px; font-weight: 500; color: #1e293b; line-height: 1.6; border-left: 4px solid #2563eb; padding-left: 18px; margin-bottom: 30px;">
                <?= esc($story['excerpt']) ?>
            </p>
        <?php endif; ?>

        <?= $story['content'] ?>
    </div>

    <!-- Author & Studio Bio -->
    <div class="story-author-box">
        <img src="<?= base_url('assets/uploads/2025/07/Renuka-Mam-257x300.png') ?>" alt="Renuka Ma'am" class="story-author-avatar">
        <div class="story-author-info">
            <h4>Windows The Art and Craft Corner</h4>
            <p>Founded by Renuka in 2000. Opening the window to your heart and soul through creativity, curiosity, and artistic freedom across Delhi & Gurugram.</p>
            <div style="margin-top: 10px;">
                <a href="<?= base_url('stories') ?>" style="color: #2563eb; font-weight: 600; font-size: 13px; text-decoration: none;">&larr; Browse All Stories</a>
            </div>
        </div>
    </div>

    <?php if (!empty($relatedStories)): ?>
        <div class="story-related">
            <div class="story-related-container">
                <div class="story-related-header">
                    <h3>More Stories from Windows</h3>
                </div>
                <div class="story-related-grid">
                    <?php foreach ($relatedStories as $rel): ?>
                        <a href="<?= base_url('stories/' . $rel['slug']) ?>" class="story-related-card">
                            <img src="<?= base_url($rel['featured_image'] ?: 'assets/uploads/2025/03/window.jpg') ?>" alt="<?= esc($rel['title']) ?>" class="story-related-img">
                            <div class="story-related-content">
                                <div class="story-related-title"><?= esc($rel['title']) ?></div>
                                <div class="story-related-date"><?= !empty($rel['created_at']) ? date('M j, Y', strtotime($rel['created_at'])) : 'Recent' ?> &bull; Read Story &rarr;</div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</article>

<?= $this->endSection() ?>
