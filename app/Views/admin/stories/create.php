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
                        <label class="form-label" for="slug">URL Slug (leave empty to generate)</label>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="e.g. suhanis-artistic-journey" value="<?= old('slug') ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="category">Category *</label>
                        <select name="category" id="category" class="form-control">
                            <option value="Student Journey" selected>Student Journeys</option>
                            <option value="Art & Craft">Art &amp; Craft</option>
                            <option value="Exhibition">Exhibitions</option>
                            <option value="Workshop">Workshops</option>
                        </select>
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

                <div class="form-group">
                    <label class="form-label">Featured Image</label>
                    <div style="background: #f8fafc; border: 2px dashed #cbd5e1; border-radius: 10px; padding: 20px; text-align: center;">
                        <div id="story-preview-wrap" style="display: none; margin-bottom: 14px;">
                            <img id="story-preview" src="#" alt="Preview" style="max-height: 140px; border-radius: 8px; border: 1px solid #cbd5e1; object-fit: cover;">
                        </div>
                        <label for="image_file" class="btn btn-secondary btn-sm" style="cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Choose Image to Upload
                        </label>
                        <input type="file" name="image_file" id="image_file" style="display: none;" accept="image/*" onchange="previewUpload(this, 'story-preview-wrap', 'story-preview', 'file-name-label')">
                        <div id="file-name-label" style="font-size: 13px; color: #64748b; margin-top: 6px;">No file chosen (JPG, PNG, WebP)</div>
                        
                        <div style="margin-top: 10px;">
                            <a href="javascript:void(0)" onclick="toggleManualPath()" style="font-size: 12px; color: #2563eb; text-decoration: none;">+ Or enter existing image path / URL</a>
                        </div>
                        <div id="manual-path-box" style="display: none; margin-top: 10px; max-width: 480px; margin-left: auto; margin-right: auto;">
                            <input type="text" name="featured_image" id="featured_image" class="form-control" placeholder="e.g. assets/uploads/..." value="<?= old('featured_image') ?>">
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Publish Story</button>
                    <a href="<?= base_url('admin/stories') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function previewUpload(input, wrapId, imgId, labelId) {
    if (input.files && input.files[0]) {
        const file = input.files[0];
        document.getElementById(labelId).textContent = file.name + ' (' + (file.size / 1024).toFixed(1) + ' KB)';
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.getElementById(imgId);
            img.src = e.target.result;
            document.getElementById(wrapId).style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
}
function toggleManualPath() {
    const box = document.getElementById('manual-path-box');
    box.style.display = box.style.display === 'none' ? 'block' : 'none';
}
</script>

<?= $this->endSection() ?>
