<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h2>Parent Reviews & Testimonials</h2>
        <a href="<?= base_url('admin/testimonials/create') ?>" class="btn btn-primary">+ Add Review</a>
    </div>
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Parent / Author</th>
                    <th>Child Info</th>
                    <th>Review</th>
                    <th>Rating</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($testimonials)): ?>
                    <tr>
                        <td colspan="6" style="text-align: center; color: #94a3b8; padding: 32px;">No reviews added yet.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($testimonials as $t): ?>
                        <tr>
                            <td><strong><?= esc($t['parent_name']) ?></strong></td>
                            <td style="color: #64748b;"><?= esc($t['child_info'] ?? '—') ?></td>
                            <td>"<?= esc(character_limiter($t['review'], 65)) ?>"</td>
                            <td style="color: #f59e0b; font-weight: 700;">
                                <?= str_repeat('★', (int)$t['rating']) ?><?= str_repeat('☆', 5 - (int)$t['rating']) ?>
                            </td>
                            <td>
                                <?php if ($t['status'] === 'active'): ?>
                                    <span class="badge badge-success">Active</span>
                                <?php else: ?>
                                    <span class="badge badge-warning">Hidden</span>
                                <?php endif; ?>
                            </td>
                            <td style="white-space: nowrap;">
                                <a href="<?= base_url('admin/testimonials/edit/' . $t['id']) ?>" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="<?= base_url('admin/testimonials/delete/' . $t['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this review?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
