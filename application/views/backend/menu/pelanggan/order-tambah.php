<!-- Bootstrap Select Css -->
<link href="<?= base_url('assets/template/backend/') ?>plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<!-- Dropzone Css -->
<link href="<?= base_url('assets/template/backend/') ?>plugins/dropzone/dropzone.css" rel="stylesheet">

<div class="container-fluid">
    <div class="block-header">
        <h2>ADD NEW OODER</h2>
    </div>

    <div class="card">
        <div class="body">
            <form action="<?= site_url('pes-simpan'); ?>" method="POST">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <select class="form-control show-tick" name="level" required>
                                    <option value="">-- Pelanggan --</option>
                                    <option value="admin">Admin</option>
                                    <option value="super admin">Super Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <select class="form-control show-tick" name="level" required>
                                    <option value="">-- Produk --</option>
                                    <option value="admin">Admin</option>
                                    <option value="super admin">Super Admin</option>
                                </select>
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
<!-- Dropzone Plugin Js -->
<script src="<?= base_url('assets/template/backend/') ?>plugins/dropzone/dropzone.js"></script>
<!-- Custom Js -->
<script src="<?= base_url('assets/template/backend/') ?>js/admin.js"></script>
<script src="<?= base_url('assets/template/backend/') ?>js/pages/forms/advanced-form-elements.js"></script>