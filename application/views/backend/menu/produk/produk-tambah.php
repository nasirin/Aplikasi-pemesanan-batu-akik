<div class="container-fluid">
    <div class="block-header">
        <h2>ADD NEW PRODUK</h2>
    </div>

    <div class="card">
        <div class="body">
            <form action="<?= site_url('produk-simpan'); ?>" method="POST" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" required>
                                <label class="form-label">Name Product</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" min="0" class="form-control" name="harga" required>
                                <label class="form-label">Price</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" class="form-control" name="gambar" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="jenis" required>
                                <label class="form-label">Jenis</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" min="0" class="form-control" name="berat" required>
                                <label class="form-label">Berat</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" placeholder="Description.." name="desc" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary btn-lg waves-effect waves-red"> Add</button>
                    </div>
                    <div class="btn-group">
                        <a href="<?= site_url('produk'); ?>" class="btn btn-secondary btn-lg waves-effect waves-red">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>