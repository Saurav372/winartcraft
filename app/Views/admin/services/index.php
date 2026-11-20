<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h2>Workshops & Mentoring Services</h2>
        <a href="<?= base_url('admin/services/create') ?>" class="btn btn-primary">+ Add Workshop / Class</a>
    </div>
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 70px;">Image</th>
                    <th>Title & Category</th>
                    <th>Time Slot</th>
                    <th>Description</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($services)): ?>
                    <tr>
                        <td colspan="6" style="text-align: center; color: #94a3b8; padding: 32px;">No workshops or services found.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($services as $srv): ?>
                        <tr>
                            <td>
                                <?php if (!empty($srv['image'])): ?>
                                    <img src="<?= base_url($srv['image']) ?>" alt="Thumbnail" style="width: 50px; height: 50px; object-fit: cover; border-radius: 6px;">
                                <?php else: ?>
                                    <div style="width: 50px; height: 50px; background: #e2e8f0; border-radius: 6px;"></div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <strong><?= esc($srv['title']) ?></strong><br>
                                <span class="badge badge-info"><?= esc($srv['category']) ?></span>
                            </td>
                            <td>
                                <strong style="color: #2563eb;"><?= esc($srv['time_slot'] ?? 'N/A') ?></strong>
                            </td>
                            <td>
                                <span style="font-size: 13px; color: #64748b;"><?= esc(character_limiter($srv['description'], 50)) ?></span>
                            </td>
                            <td><?= (int)$srv['display_order'] ?></td>
                            <td style="white-space: nowrap;">
                                <a href="<?= base_url('admin/services/edit/' . $srv['id']) ?>" class="btn btn-secondary btn-sm">Edit</a>
                                <a href="<?= base_url('admin/services/delete/' . $srv['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this service?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
