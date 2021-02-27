 <!-- start banner Area -->
 <section class="banner-area">
     <div class="container">
         <div class="row fullscreen align-items-center justify-content-start">
             <div class="col-lg-12">
                 <div class="owl-carousel">
                     <!-- single-slide -->
                     <div class="row single-slide align-items-center d-flex">
                         <div class="col-lg-5 col-md-6">
                             <div class="banner-content">
                                 <h1>Sauma <br>Collection!</h1>
                                 <p>Menyediakan berbagai macam design cincin yang bagus dan berkualitas</p>
                                 <div class="add-bag d-flex align-items-center">
                                     <a class="add-btn" href="<?= site_url('shop'); ?>" style="color: white;">Show</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-7">
                             <div class="banner-img">
                                 <img class="img-fluid" src="<?= base_url('assets/img/banner.png') ?>" alt="" width="400" height="400">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End banner Area -->

 <!-- start features Area -->
 <section class="features-area section_gap">
     <div class="container">
         <div class="row features-inner">
             <!-- single features -->
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <div class="single-features">
                     <div class="f-icon">
                         <img src="<?= base_url('assets/template/frontend/') ?>img/features/f-icon1.png" alt="">
                     </div>
                     <h6>Free Delivery</h6>
                     <p>Free Shipping on all order</p>
                 </div>
             </div>
             <!-- single features -->
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <div class="single-features">
                     <div class="f-icon">
                         <img src="<?= base_url('assets/template/frontend/') ?>img/features/f-icon2.png" alt="">
                     </div>
                     <h6>Return Policy</h6>
                     <p>Free Shipping on all order</p>
                 </div>
             </div>
             <!-- single features -->
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <div class="single-features">
                     <div class="f-icon">
                         <img src="<?= base_url('assets/template/frontend/') ?>img/features/f-icon3.png" alt="">
                     </div>
                     <h6>24/7 Support</h6>
                     <p>Free Shipping on all order</p>
                 </div>
             </div>
             <!-- single features -->
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <div class="single-features">
                     <div class="f-icon">
                         <img src="<?= base_url('assets/template/frontend/') ?>img/features/f-icon4.png" alt="">
                     </div>
                     <h6>Secure Payment</h6>
                     <p>Free Shipping on all order</p>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- end features Area -->

 <!-- start product Area -->
 <section class="owl-carousel section_gap">
     <div class="single-product-slider">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-6 text-center">
                     <div class="section-title">
                         <h1>Latest Products</h1>
                         <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                             dolore
                             magna aliqua.</p> -->
                     </div>
                 </div>
             </div>
             <div class="row">
                 <?php foreach ($produk as $data) : ?>
                     <div class="col-lg-3 col-md-6">
                         <div class="single-product">
                             <img class="img-fluid" src="<?= base_url('assets/img/produk/' . $data['imgProduk']) ?>" alt="">
                             <div class="product-details">
                                 <h6><?= ucwords($data['namaProduk']); ?></h6>
                                 <div class="price">
                                     <h6>Rp <?= number_format($data['hargaProduk'], 0, ',', '.'); ?></h6>
                                     <!-- <h6 class="l-through">$210.00</h6> -->
                                 </div>
                                 <div class="prd-bottom">
                                     <a href="<?= site_url('shop-detail/' . $data['idProduk']) ?>" class="social-info">
                                         <span class="lnr lnr-eye"></span>
                                         <p class="hover-text">Details</p>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </section>
 <!-- end product Area -->