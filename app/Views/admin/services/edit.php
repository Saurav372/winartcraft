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

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="display_order">Display Order</label>
                        <input type="number" name="display_order" id="display_order" class="form-control" value="<?= (int)$service['display_order'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="image">Image Path / URL</label>
                        <input type="text" name="image" id="image" class="form-control" value="<?= esc($service['image'] ?? '') ?>">
                        <?php if (!empty($service['image'])): ?>
                            <div style="margin-top: 8px;">
                                <img src="<?= base_url($service['image']) ?>" alt="Image" style="height: 50px; border-radius: 6px; border: 1px solid #cbd5e1;">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="image_file">Or Replace Image File</label>
                    <input type="file" name="image_file" id="image_file" class="form-control" accept="image/*">
                </div>

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="<?= base_url('admin/services') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
