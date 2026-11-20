<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Stat Cards -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-details">
            <h3>Contact Inquiries</h3>
            <div class="stat-number">
                <?= $stats['total_inquiries'] ?>
                <?php if ($stats['unread_inquiries'] > 0): ?>
                    <span class="badge badge-danger" style="font-size: 13px; margin-left: 8px;"><?= $stats['unread_inquiries'] ?> New</span>
                <?php endif; ?>
            </div>
        </div>
        <div class="stat-icon icon-blue">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-details">
            <h3>Stories & Articles</h3>
            <div class="stat-number"><?= $stats['total_stories'] ?></div>
        </div>
        <div class="stat-icon icon-amber">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-details">
            <h3>Workshops & Programs</h3>
            <div class="stat-number"><?= $stats['total_services'] ?></div>
        </div>
        <div class="stat-icon icon-emerald">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-details">
            <h3>Parent Reviews</h3>
            <div class="stat-number"><?= $stats['total_reviews'] ?></div>
        </div>
        <div class="stat-icon icon-purple">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
        </div>
    </div>
</div>

<div class="form-row">
    <!-- Recent Inquiries -->
    <div class="card">
        <div class="card-header">
            <h2>Recent Contact Messages</h2>
            <a href="<?= base_url('admin/inquiries') ?>" class="btn btn-secondary btn-sm">View All</a>
        </div>
        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Sender</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($recentInquiries)): ?>
                        <tr>
                            <td colspan="4" style="text-align: center; color: #94a3b8; padding: 24px;">No inquiries received yet.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($recentInquiries as $inq): ?>
                            <tr>
                                <td>
                                    <?php if ($inq['status'] === 'unread'): ?>
                                        <span class="badge badge-danger">Unread</span>
                                    <?php else: ?>
                                        <span class="badge badge-success">Read</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <strong><?= esc($inq['name']) ?></strong><br>
                                    <span style="font-size: 12px; color: #64748b;"><?= esc($inq['email']) ?></span>
                                </td>
                                <td>
                                    <?= esc(character_limiter($inq['message'], 40)) ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/inquiries/view/' . $inq['id']) ?>" class="btn btn-secondary btn-sm">View</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Recent Stories -->
    <div class="card">
        <div class="card-header">
            <h2>Recent Stories & Articles</h2>
            <a href="<?= base_url('admin/stories/create') ?>" class="btn btn-primary btn-sm">+ Add Story</a>
        </div>
        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Views</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($recentStories)): ?>
                        <tr>
                            <td colspan="4" style="text-align: center; color: #94a3b8; padding: 24px;">No stories published yet.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($recentStories as $story): ?>
                            <tr>
                                <td>
                                    <strong><?= esc($story['title']) ?></strong><br>
                                    <span style="font-size: 12px; color: #64748b;">/stories/<?= esc($story['slug']) ?></span>
                                </td>
                                <td>
                                    <span class="badge badge-success"><?= ucfirst(esc($story['status'])) ?></span>
                                </td>
                                <td><?= (int)$story['views'] ?></td>
                                <td>
                                    <a href="<?= base_url('admin/stories/edit/' . $story['id']) ?>" class="btn btn-secondary btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
