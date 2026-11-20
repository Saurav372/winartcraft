<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div style="max-width: 900px; margin: 0 auto;">
    <div style="margin-bottom: 20px;">
        <a href="<?= base_url('admin/stories') ?>" class="btn btn-secondary btn-sm">← Back to Stories</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Add New Story / Showcase</h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/stories/store') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label class="form-label" for="title">Story Title *</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="e.g. Suhani’s Artistic Journey at Windows" value="<?= old('title') ?>" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="slug">URL Slug (leave empty to generate automatically)</label>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="e.g. suhanis-artistic-journey" value="<?= old('slug') ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="status">Publication Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="published" selected>Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="excerpt">Short Excerpt / Summary</label>
                    <textarea name="excerpt" id="excerpt" class="form-control" style="min-height: 80px;" placeholder="Brief highlight of the story..."><?= old('excerpt') ?></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="content">Full Story Content (HTML supported) *</label>
                    <textarea name="content" id="content" class="form-control" style="min-height: 220px;" placeholder="<p>Write the inspiring story here...</p>"><?= old('content') ?></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="featured_image">Featured Image Path / URL</label>
                        <input type="text" name="featured_image" id="featured_image" class="form-control" placeholder="assets/uploads/2025/03/window.jpg" value="<?= old('featured_image') ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="image_file">Or Upload Image</label>
                        <input type="file" name="image_file" id="image_file" class="form-control" accept="image/*">
                    </div>
                </div>

                <div style="display: flex; gap: 12px; margin-top: 10px;">
                    <button type="submit" class="btn btn-primary">Publish Story</button>
                    <a href="<?= base_url('admin/stories') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
