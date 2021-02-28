<!-- <body id="category"> -->
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Shop page</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= base_url(); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Shop</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Start Filter Bar -->
            <!-- <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div> -->
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <?php foreach ($produk as $data) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="<?= base_url('assets/img/produk/' . $data['imgProduk']) ?>" alt="">
                                <div class="product-details">
                                    <h6><?= ucwords($data['namaProduk']); ?></h6>
                                    <div class="price">
                                        <h6>Rp <?= number_format($data['hargaProduk'], 0, ',', '.'); ?></h6>
                                        <!-- <h6 class="l-through">$210.00</h6> -->
                                    </div>
                                    <div class="prd-bottom">

                                        <a href="<?= site_url('shop-detail/' . $data['idProduk']); ?>" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">Detail</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <!-- <div class="filter-bar d-flex flex-wrap align-items-center mb-5">
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div> -->
            <!-- End Filter Bar -->
        </div>
    </div>
</div>