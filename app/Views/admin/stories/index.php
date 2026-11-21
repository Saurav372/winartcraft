<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h2>Published Stories & Student Showcases</h2>
        <a href="<?= base_url('admin/stories/create') ?>" class="btn btn-primary">+ Add New Story</a>
    </div>
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 70px;">Image</th>
                    <th>Title & URL</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Views</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($stories)): ?>
                    <tr>
                        <td colspan="7" style="text-align: center; color: #94a3b8; padding: 32px;">No stories found. Click "+ Add New Story" to create one.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($stories as $story): ?>
                        <tr>
                            <td>
                                <?php if (!empty($story['featured_image'])): ?>
                                    <img src="<?= base_url($story['featured_image']) ?>" alt="Thumbnail" style="width: 50px; height: 50px; object-fit: cover; border-radius: 6px;">
                                <?php else: ?>
                                    <div style="width: 50px; height: 50px; background: #e2e8f0; border-radius: 6px;"></div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <strong><?= esc($story['title']) ?></strong><br>
                                <a href="<?= base_url('stories/' . $story['slug']) ?>" target="_blank" style="font-size: 12px; color: #2563eb; text-decoration: none;">
                                    /stories/<?= esc($story['slug']) ?> ↗
                                </a>
                            </td>
                            <td>
                                <span class="badge" style="background: #eff6ff; color: #2563eb; border: 1px solid #bfdbfe;">
                                    <?= esc($story['category'] ?? 'Student Journey') ?>
                                </span>
                            </td>
                            <td>
                                <?php if ($story['status'] === 'published'): ?>
                                    <span class="badge badge-success">Published</span>
                                <?php else: ?>
                                    <span class="badge badge-warning">Draft</span>
                                <?php endif; ?>
                            </td>
                            <td><?= (int)$story['views'] ?></td>
                            <td style="font-size: 13px; color: #64748b;">
                                <?= date('M d, Y', strtotime($story['created_at'])) ?>
                            </td>
                            <td style="white-space: nowrap;">
                                <a href="<?= base_url('admin/stories/edit/' . $story['id']) ?>" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="<?= base_url('admin/stories/delete/' . $story['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this story?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
