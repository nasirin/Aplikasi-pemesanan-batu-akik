<!-- Bootstrap Select Css -->
<link href="<?= base_url('assets/template/backend/') ?>plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<div class="container-fluid">
    <div class="block-header">
        <h2>EDIT PRODUCT</h2>
    </div>

    <div class="card">
        <div class="body">
            <form action="<?= site_url('produk-ganti/' . $produk['id_produk']); ?>" method="POST" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" value="<?= $produk['nama_produk']; ?>" required>
                                <label class="form-label">Name Product</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" min="0" class="form-control" name="harga" value="<?= $produk['harga_produk']; ?>" required>
                                <label class="form-label">Price</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <img src="<?= base_url('assets/img/produk/'.$produk['img_produk']); ?>" width="200" alt="">
                                <input type="file" class="form-control" name="gambar" value="<?= $produk['img_produk']; ?>">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" placeholder="Description.." name="desc" required><?= $produk['desc_produk']; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary btn-lg waves-effect waves-red"> Update</button>
                    </div>
                    <div class="btn-group">
                        <a href="<?= site_url('produk'); ?>" class="btn btn-secondary btn-lg waves-effect waves-red">Cancel</a>
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