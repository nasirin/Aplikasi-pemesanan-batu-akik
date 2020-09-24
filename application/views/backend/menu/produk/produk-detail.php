    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img src="<?= base_url('assets/img/produk/' . $produk['img_produk']); ?>" width="200" height="200" alt="Profile Image" />
                        </div>
                        <div class="content-area">
                            <h3><?= ucwords($produk['nama_produk']); ?></h3>
                            <p><?= $produk['jenis_batu']; ?></p>
                            <p><?= $produk['berat_batu']; ?></p>
                            <p>Rp.<?= number_format($produk['harga_produk'], 0, ',', '.'); ?></p>
                        </div>
                    </div>
                    <div class="card-about-me">
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">email</i>
                                        Description
                                    </div>
                                    <div class="content">
                                        <?= $produk['desc_produk']; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>