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
            <form action="<?= base_url('admin/testimonials/store') ?>" method="post">
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

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Save Review</button>
                    <a href="<?= base_url('admin/testimonials') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
