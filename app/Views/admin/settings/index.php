<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div style="max-width: 900px; margin: 0 auto;">
    <form action="<?= base_url('admin/settings/update') ?>" method="post">
        <?= csrf_field() ?>

        <!-- Studio & Contact Information -->
        <div class="card">
            <div class="card-header">
                <h2>Studio & Contact Information</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label" for="site_title">Website Title</label>
                    <input type="text" name="site_title" id="site_title" class="form-control" value="<?= esc($settings['site_title'] ?? 'Windows - The Art and Craft Corner') ?>">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="contact_email">Public Contact Email</label>
                        <input type="email" name="contact_email" id="contact_email" class="form-control" value="<?= esc($settings['contact_email'] ?? 'info@winartcraft.com') ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact_phone">Contact Phone / WhatsApp</label>
                        <input type="text" name="contact_phone" id="contact_phone" class="form-control" value="<?= esc($settings['contact_phone'] ?? '+91 98100 00000') ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="studio_address">Main Studio Location / Address</label>
                    <textarea name="studio_address" id="studio_address" class="form-control" style="min-height: 80px;"><?= esc($settings['studio_address'] ?? '') ?></textarea>
                </div>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="card">
            <div class="card-header">
                <h2>Social Media Links</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label" for="instagram_url">Instagram Profile URL</label>
                    <input type="url" name="instagram_url" id="instagram_url" class="form-control" value="<?= esc($settings['instagram_url'] ?? '') ?>" placeholder="https://instagram.com/winartcraft">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="facebook_url">Facebook Page URL</label>
                        <input type="url" name="facebook_url" id="facebook_url" class="form-control" value="<?= esc($settings['facebook_url'] ?? '') ?>" placeholder="https://facebook.com/winartcraft">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="youtube_url">YouTube Channel URL</label>
                        <input type="url" name="youtube_url" id="youtube_url" class="form-control" value="<?= esc($settings['youtube_url'] ?? '') ?>" placeholder="https://youtube.com/@winartcraft">
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Profile & Security -->
        <div class="card">
            <div class="card-header">
                <h2>Admin Profile & Security</h2>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="admin_name">Admin Display Name</label>
                        <input type="text" name="admin_name" id="admin_name" class="form-control" value="<?= esc($admin['name'] ?? 'Administrator') ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="admin_email_disp">Admin Login Email (Cannot be changed)</label>
                        <input type="email" id="admin_email_disp" class="form-control" value="<?= esc($admin['email'] ?? 'admin@winartcraft.com') ?>" disabled style="background: #f1f5f9;">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="new_password">Change Password (leave empty to keep current password)</label>
                    <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Enter new password (min. 6 chars)">
                </div>
            </div>
        </div>

        <div style="margin-bottom: 40px;">
            <button type="submit" class="btn btn-primary" style="padding: 12px 28px; font-size: 15px;">Save All Settings</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
