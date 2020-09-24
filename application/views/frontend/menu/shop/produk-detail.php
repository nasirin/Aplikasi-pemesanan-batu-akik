<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Product Details Page</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= base_url(); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?= site_url('shop'); ?>">Shop<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">product-details</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mr-2">
                <div class="pt-5">
                    <img class="img-fluid" src="<?= base_url('assets/img/produk/' . $produk['img_produk']) ?>" alt="">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="s_product_text">
                    <h3><?= ucwords($produk['nama_produk']); ?></h3>
                    <h2>Rp <?= number_format($produk['harga_produk'], 0, ',', '.'); ?></h2>
                    <ul class="list">
                        <li><a href="#"><span>Availibility</span> : Ready</a></li>
                    </ul>
                    <p><?= ucfirst($produk['desc_produk']); ?></p>

                    <form action="<?= site_url('pes-simpan/' . $produk['id_produk']); ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="number" name="qty" min="0" class="form-control" placeholder="QTY" required>
                            </div>
                            <div class="col-lg-5">
                                <input type="number" min="0" name="ukuran" class="form-control" placeholder="Ukuran cincin" required>
                            </div>
                        </div>
                        <div class="card_area d-flex align-items-center mt-3">
                            <button type="submit" style="border: none;" class="primary-btn">Buy Now</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p><?= ucfirst($produk['desc_produk']); ?></p>
            </div>
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <h5>Jenis Batu</h5>
                                </td>
                                <td>
                                    <h5><?= $produk['jenis_batu']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Berat</h5>
                                </td>
                                <td>
                                    <h5><?= $produk['berat_batu']; ?> gram</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Description Area =================-->