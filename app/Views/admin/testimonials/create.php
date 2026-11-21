<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div style="max-width: 800px; margin: 0 auto;">
    <div style="margin-bottom: 20px;">
        <a href="<?= base_url('admin/testimonials') ?>" class="btn btn-secondary btn-sm">← Back to Reviews</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Add Parent Review</h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/testimonials/store') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="parent_name">Parent Name *</label>
                        <input type="text" name="parent_name" id="parent_name" class="form-control" placeholder="e.g. Priya Sharma" value="<?= old('parent_name') ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="child_info">Child Info / Tagline</label>
                        <input type="text" name="child_info" id="child_info" class="form-control" placeholder="e.g. Mother of Aarav (Age 8)" value="<?= old('child_info') ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="review">Review / Testimonial Text *</label>
                    <textarea name="review" id="review" class="form-control" placeholder="What does the parent say about Windows Art & Craft Corner?" required><?= old('review') ?></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="rating">Star Rating (1 - 5)</label>
                        <select name="rating" id="rating" class="form-control">
                            <option value="5" selected>5 Stars (★★★★★)</option>
                            <option value="4">4 Stars (★★★★☆)</option>
                            <option value="3">3 Stars (★★★☆☆)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="status">Display Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="active" selected>Active (Visible)</option>
                            <option value="hidden">Hidden</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Parent / Child Photo (Optional)</label>
                    <div style="background: #f8fafc; border: 2px dashed #cbd5e1; border-radius: 10px; padding: 20px; text-align: center;">
                        <div id="avatar-preview-wrap" style="display: none; margin-bottom: 14px;">
                            <img id="avatar-preview" src="#" alt="Preview" style="width: 80px; height: 80px; border-radius: 50%; border: 2px solid #cbd5e1; object-fit: cover;">
                        </div>
                        <label for="avatar_file" class="btn btn-secondary btn-sm" style="cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Choose Photo to Upload
                        </label>
                        <input type="file" name="avatar_file" id="avatar_file" style="display: none;" accept="image/*" onchange="previewUpload(this, 'avatar-preview-wrap', 'avatar-preview', 'file-name-label')">
                        <div id="file-name-label" style="font-size: 13px; color: #64748b; margin-top: 6px;">No photo selected (JPG, PNG)</div>
                        
                        <div style="margin-top: 10px;">
                            <a href="javascript:void(0)" onclick="toggleManualPath()" style="font-size: 12px; color: #2563eb; text-decoration: none;">+ Or enter existing photo path / URL</a>
                        </div>
                        <div id="manual-path-box" style="display: none; margin-top: 10px; max-width: 480px; margin-left: auto; margin-right: auto;">
                            <input type="text" name="avatar" id="avatar" class="form-control" placeholder="e.g. assets/uploads/..." value="<?= old('avatar') ?>">
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Save Review</button>
                    <a href="<?= base_url('admin/testimonials') ?>" class="btn btn-secondary">Cancel</a>
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
