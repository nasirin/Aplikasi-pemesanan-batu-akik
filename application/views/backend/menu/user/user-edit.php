<!-- Bootstrap Select Css -->
<link href="<?= base_url('assets/template/backend/') ?>plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<div class="container-fluid">
    <div class="block-header">
        <h2>EDIT USER</h2>
    </div>

    <div class="card">
        <div class="body">
            <form action="<?= site_url('user-ubah/' . $user['idUser']); ?>" method="POST">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <select class="form-control show-tick" name="level" required>
                                    <option value="">-- Level --</option>
                                    <option value="admin" <?= $user['level'] == 'admin' ? 'selected': ''; ?>>Admin</option>
                                    <option value="super admin" <?= $user['level'] == 'super admin' ?'selected': ''; ?>>Super Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" value="<?= $user['namaUser']; ?>" required>
                                <label class="form-label">Nama User</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" value="<?= $user['emailUser']; ?>" required>
                                <label class="form-label">Email Address...</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="pass" value="<?= $user['passUser']; ?>" required>
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" min="0" class="form-control" name="notelp" value="<?= $user['notelpUser']; ?>" required>
                                <label class="form-label">Phone number</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" placeholder="Address..." name="alamat" required><?= $user['alamatUser']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="switch">
                                <label>Non Active<input type="checkbox" name="status" <?= $user['statusUser'] == null ? '' : 'checked'; ?>><span class="lever"></span>Active</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary btn-lg waves-effect waves-red"> Add</button>
                    </div>
                    <div class="btn-group">
                        <a href="<?= site_url('user'); ?>" class="btn btn-secondary btn-lg waves-effect waves-red">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Select Plugin Js -->
<script src="<?= base_url('assets/template/backend/') ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>
<!-- Custom Js -->
<script src="<?= base_url('assets/template/backend/') ?>js/admin.js"></script>
<script src="<?= base_url('assets/template/backend/') ?>js/pages/forms/advanced-form-elements.js"></script>