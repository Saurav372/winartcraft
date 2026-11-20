<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div style="max-width: 800px; margin: 0 auto;">
    <div style="margin-bottom: 20px;">
        <a href="<?= base_url('admin/inquiries') ?>" class="btn btn-secondary btn-sm">← Back to All Inquiries</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Inquiry Details #<?= $inquiry['id'] ?></h2>
            <div>
                <?php if ($inquiry['status'] === 'unread'): ?>
                    <span class="badge badge-danger">Unread</span>
                <?php else: ?>
                    <span class="badge badge-success">Read</span>
                <?php endif; ?>
            </div>
        </div>
        <div class="card-body">
            <div style="display: grid; grid-template-columns: 120px 1fr; gap: 14px; margin-bottom: 24px; font-size: 14px;">
                <div style="color: #64748b; font-weight: 600;">Date:</div>
                <div><?= date('F d, Y \a\t h:i A', strtotime($inquiry['created_at'])) ?></div>

                <div style="color: #64748b; font-weight: 600;">Sender:</div>
                <div><strong><?= esc($inquiry['name']) ?></strong></div>

                <div style="color: #64748b; font-weight: 600;">Email:</div>
                <div>
                    <a href="mailto:<?= esc($inquiry['email']) ?>" style="color: #2563eb; text-decoration: underline;">
                        <?= esc($inquiry['email']) ?>
                    </a>
                </div>
            </div>

            <hr style="border: none; border-top: 1px solid #e2e8f0; margin-bottom: 20px;">

            <div style="margin-bottom: 28px;">
                <h4 style="font-size: 13px; text-transform: uppercase; color: #64748b; margin-bottom: 10px; letter-spacing: 0.5px;">Message Content:</h4>
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; font-size: 15px; line-height: 1.6; color: #1e293b; white-space: pre-wrap;">
                    <?= esc($inquiry['message']) ?>
                </div>
            </div>

            <div style="display: flex; gap: 12px;">
                <a href="mailto:<?= esc($inquiry['email']) ?>?subject=Re: Inquiry with WinArtCraft" class="btn btn-primary">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>Reply via Email</span>
                </a>
                <a href="<?= base_url('admin/inquiries/delete/' . $inquiry['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this inquiry?');">
                    <span>Delete Inquiry</span>
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
