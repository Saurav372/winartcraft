<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div style="max-width: 800px; margin: 0 auto;">
    <div style="margin-bottom: 20px;">
        <a href="<?= base_url('admin/services') ?>" class="btn btn-secondary btn-sm">← Back to Services</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Edit Service: <?= esc($service['title']) ?></h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/services/update/' . $service['id']) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label class="form-label" for="title">Session / Workshop Title *</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?= esc($service['title']) ?>" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="Workshop" <?= $service['category'] === 'Workshop' ? 'selected' : '' ?>>Workshop</option>
                            <option value="Mentoring" <?= $service['category'] === 'Mentoring' ? 'selected' : '' ?>>Mentoring</option>
                            <option value="Event" <?= $service['category'] === 'Event' ? 'selected' : '' ?>>Event</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="time_slot">Time Slot / Schedule</label>
                        <input type="text" name="time_slot" id="time_slot" class="form-control" value="<?= esc($service['time_slot'] ?? '') ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="description">Description</label>
                    <textarea name="description" id="description" class="form-control"><?= esc($service['description'] ?? '') ?></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="display_order">Display Order</label>
                    <input type="number" name="display_order" id="display_order" class="form-control" value="<?= (int)$service['display_order'] ?>" style="max-width: 200px;">
                </div>

                <div class="form-group">
                    <label class="form-label">Workshop Image</label>
                    <div style="background: #f8fafc; border: 2px dashed #cbd5e1; border-radius: 10px; padding: 20px; text-align: center;">
                        <div id="service-preview-wrap" style="margin-bottom: 14px; <?= empty($service['image']) ? 'display: none;' : '' ?>">
                            <img id="service-preview" src="<?= !empty($service['image']) ? base_url($service['image']) : '#' ?>" alt="Preview" style="max-height: 140px; border-radius: 8px; border: 1px solid #cbd5e1; object-fit: cover;">
                            <div style="font-size: 11px; color: #64748b; margin-top: 4px;">Current / Selected Image</div>
                        </div>
                        <label for="image_file" class="btn btn-secondary btn-sm" style="cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Upload New Image to Replace
                        </label>
                        <input type="file" name="image_file" id="image_file" style="display: none;" accept="image/*" onchange="previewUpload(this, 'service-preview-wrap', 'service-preview', 'file-name-label')">
                        <div id="file-name-label" style="font-size: 13px; color: #64748b; margin-top: 6px;">Leave empty to keep current image</div>
                        
                        <div style="margin-top: 10px;">
                            <a href="javascript:void(0)" onclick="toggleManualPath()" style="font-size: 12px; color: #2563eb; text-decoration: none;">+ Or edit image path / URL manually</a>
                        </div>
                        <div id="manual-path-box" style="display: none; margin-top: 10px; max-width: 480px; margin-left: auto; margin-right: auto;">
                            <input type="text" name="image" id="image" class="form-control" placeholder="e.g. assets/uploads/..." value="<?= esc($service['image'] ?? '') ?>">
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="<?= base_url('admin/services') ?>" class="btn btn-secondary">Cancel</a>
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
