    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img src="<?= base_url('assets/img/produk/' . $produk['imgProduk']); ?>" width="200" height="200" alt="Profile Image" />
                        </div>
                        <div class="content-area">
                            <h3><?= ucwords($produk['namaProduk']); ?></h3>
                            <p><?= $produk['jenisBatu']; ?></p>
                            <p><?= $produk['beratBatu']; ?></p>
                            <p>Rp.<?= number_format($produk['hargaProduk'], 0, ',', '.'); ?></p>
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
                                        <?= $produk['descProduk']; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>