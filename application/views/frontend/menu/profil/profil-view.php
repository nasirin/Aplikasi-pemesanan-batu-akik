 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
     <div class="container">
         <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
             <div class="col-first">
                 <h1>Blog Page</h1>
                 <nav class="d-flex align-items-center">
                     <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                     <a href="category.html">Blog</a>
                 </nav>
             </div>
         </div>
     </div>
 </section>
 <!-- End Banner Area -->

 <!--================Blog Area =================-->
 <section class="blog_area single-post-area section_gap">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="blog_right_sidebar">
                     <aside class="single_sidebar_widget author_widget">
                         <img class="author_img rounded-circle" src="<?= base_url('assets/template/frontend/'); ?>img/blog/author.png" alt="">
                         <h4><?= ucwords($pel['namaPelanggan']); ?></h4>
                         <p><?= $pel['emailPelanggan']; ?></p>
                         <p><?= $pel['notelpPelanggan']; ?></p>
                         <p><?= ucfirst($pel['alamatPelanggan']); ?></p>
                         <div class="br"></div>
                     </aside>
                     <aside class="single_sidebar_widget popular_post_widget">
                         <a href="<?= site_url('signout'); ?>" class="btn btn-danger d-block" style="color: white;"> Logout</a>
                     </aside>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================Blog Area =================-->