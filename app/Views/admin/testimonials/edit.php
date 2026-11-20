<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div style="max-width: 800px; margin: 0 auto;">
    <div style="margin-bottom: 20px;">
        <a href="<?= base_url('admin/testimonials') ?>" class="btn btn-secondary btn-sm">← Back to Reviews</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Edit Review: <?= esc($testimonial['parent_name']) ?></h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/testimonials/update/' . $testimonial['id']) ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="parent_name">Parent Name *</label>
                        <input type="text" name="parent_name" id="parent_name" class="form-control" value="<?= esc($testimonial['parent_name']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="child_info">Child Info / Tagline</label>
                        <input type="text" name="child_info" id="child_info" class="form-control" value="<?= esc($testimonial['child_info'] ?? '') ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="review">Review / Testimonial Text *</label>
                    <textarea name="review" id="review" class="form-control" required><?= esc($testimonial['review']) ?></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="rating">Star Rating (1 - 5)</label>
                        <select name="rating" id="rating" class="form-control">
                            <option value="5" <?= (int)$testimonial['rating'] === 5 ? 'selected' : '' ?>>5 Stars (★★★★★)</option>
                            <option value="4" <?= (int)$testimonial['rating'] === 4 ? 'selected' : '' ?>>4 Stars (★★★★☆)</option>
                            <option value="3" <?= (int)$testimonial['rating'] === 3 ? 'selected' : '' ?>>3 Stars (★★★☆☆)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="status">Display Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="active" <?= $testimonial['status'] === 'active' ? 'selected' : '' ?>>Active (Visible)</option>
                            <option value="hidden" <?= $testimonial['status'] === 'hidden' ? 'selected' : '' ?>>Hidden</option>
                        </select>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="<?= base_url('admin/testimonials') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
