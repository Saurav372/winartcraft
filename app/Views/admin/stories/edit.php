<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div style="max-width: 900px; margin: 0 auto;">
    <div style="margin-bottom: 20px;">
        <a href="<?= base_url('admin/stories') ?>" class="btn btn-secondary btn-sm">← Back to Stories</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Edit Story: <?= esc($story['title']) ?></h2>
            <a href="<?= base_url('stories/' . $story['slug']) ?>" target="_blank" class="btn btn-secondary btn-sm">View on Site ↗</a>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/stories/update/' . $story['id']) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label class="form-label" for="title">Story Title *</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?= esc($story['title']) ?>" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="slug">URL Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="<?= esc($story['slug']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="status">Publication Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="published" <?= $story['status'] === 'published' ? 'selected' : '' ?>>Published</option>
                            <option value="draft" <?= $story['status'] === 'draft' ? 'selected' : '' ?>>Draft</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="excerpt">Short Excerpt / Summary</label>
                    <textarea name="excerpt" id="excerpt" class="form-control" style="min-height: 80px;"><?= esc($story['excerpt'] ?? '') ?></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="content">Full Story Content (HTML supported) *</label>
                    <textarea name="content" id="content" class="form-control" style="min-height: 220px;"><?= esc($story['content'] ?? '') ?></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="featured_image">Featured Image Path / URL</label>
                        <input type="text" name="featured_image" id="featured_image" class="form-control" value="<?= esc($story['featured_image'] ?? '') ?>">
                        <?php if (!empty($story['featured_image'])): ?>
                            <div style="margin-top: 10px;">
                                <img src="<?= base_url($story['featured_image']) ?>" alt="Current Image" style="height: 60px; border-radius: 6px; border: 1px solid #cbd5e1;">
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="image_file">Or Replace Image File</label>
                        <input type="file" name="image_file" id="image_file" class="form-control" accept="image/*">
                    </div>
                </div>

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="<?= base_url('admin/stories') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
