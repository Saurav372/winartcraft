<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h2>All Inquiries & Form Messages</h2>
    </div>
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($inquiries)): ?>
                    <tr>
                        <td colspan="6" style="text-align: center; color: #94a3b8; padding: 32px;">No contact inquiries found.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($inquiries as $inq): ?>
                        <tr>
                            <td>
                                <?php if ($inq['status'] === 'unread'): ?>
                                    <span class="badge badge-danger">Unread</span>
                                <?php else: ?>
                                    <span class="badge badge-success">Read</span>
                                <?php endif; ?>
                            </td>
                            <td style="white-space: nowrap; font-size: 13px; color: #64748b;">
                                <?= date('M d, Y h:i A', strtotime($inq['created_at'])) ?>
                            </td>
                            <td><strong><?= esc($inq['name']) ?></strong></td>
                            <td>
                                <a href="mailto:<?= esc($inq['email']) ?>" style="color: #2563eb; text-decoration: none;">
                                    <?= esc($inq['email']) ?>
                                </a>
                            </td>
                            <td><?= esc(character_limiter($inq['message'], 60)) ?></td>
                            <td style="white-space: nowrap;">
                                <a href="<?= base_url('admin/inquiries/view/' . $inq['id']) ?>" class="btn btn-secondary btn-sm">View</a>
                                <a href="<?= base_url('admin/inquiries/delete/' . $inq['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this inquiry?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
