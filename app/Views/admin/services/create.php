<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div style="max-width: 800px; margin: 0 auto;">
    <div style="margin-bottom: 20px;">
        <a href="<?= base_url('admin/services') ?>" class="btn btn-secondary btn-sm">← Back to Services</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Add Workshop or Mentoring Program</h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/services/store') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label class="form-label" for="title">Session / Workshop Title *</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="e.g. Art Workshop for Young Minds" value="<?= old('title') ?>" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="Workshop" selected>Workshop</option>
                            <option value="Mentoring">Mentoring</option>
                            <option value="Event">Event</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="time_slot">Time Slot / Schedule</label>
                        <input type="text" name="time_slot" id="time_slot" class="form-control" placeholder="e.g. 10:00 AM or Weekends" value="<?= old('time_slot') ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Describe the focus and goals of this session..."><?= old('description') ?></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="display_order">Display Order</label>
                        <input type="number" name="display_order" id="display_order" class="form-control" value="<?= old('display_order', 0) ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="image">Image Path / URL</label>
                        <input type="text" name="image" id="image" class="form-control" placeholder="assets/uploads/2025/03/window.jpg" value="<?= old('image') ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="image_file">Or Upload Image</label>
                    <input type="file" name="image_file" id="image_file" class="form-control" accept="image/*">
                </div>

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Save Workshop</button>
                    <a href="<?= base_url('admin/services') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
