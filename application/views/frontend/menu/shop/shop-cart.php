 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
     <div class="container">
         <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
             <div class="col-first">
                 <h1>Shopping Cart</h1>
                 <nav class="d-flex align-items-center">
                     <a href="<?= base_url(); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                     <a href="#">Cart</a>
                 </nav>
             </div>
         </div>
     </div>
 </section>
 <!-- End Banner Area -->

 <!--================Cart Area =================-->
 <section class="cart_area">
     <div class="container">
         <div class="cart_inner">
             <div class="table-responsive">
                 <table class="table">
                     <thead>
                         <tr>
                             <th scope="col">Product</th>
                             <th scope="col">Price</th>
                             <th scope="col">Quantity</th>
                             <th scope="col">Ring</th>
                             <th scope="col">Total</th>
                             <th scope="col">Status</th>
                             <th scope="col">More</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php foreach ($pesanan as $data) : ?>
                             <tr>
                                 <td>
                                     <div class="media">
                                         <div class="d-flex">
                                             <img src="<?= base_url('assets/img/produk/' . $data['img_produk']) ?>" alt="" width="200">
                                         </div>
                                         <div class="media-body">
                                             <p><?= ucwords($data['nama_produk']); ?></p>
                                         </div>
                                     </div>
                                 </td>
                                 <td>
                                     <h5>Rp. <?= number_format($data['harga_produk'], 0, ',', '.'); ?></h5>
                                 </td>
                                 <td>
                                     <h5><?= $data['qty_pesanan']; ?></h5>
                                 </td>
                                 <td>
                                     <h5><?= $data['ukuran_cincin']; ?></h5>
                                 </td>
                                 <td>
                                     <h5>Rp. <?= number_format($data['harga_produk'] * $data['qty_pesanan'], 0, ',', '.'); ?></h5>
                                 </td>
                                 <td>
                                     <h5><?= ucwords($data['status_pesanan']); ?></h5>
                                 </td>
                                 <td>
                                     <?php if ($data['status_pesanan'] == 'pending') : ?>
                                         <a href="<?= site_url('shop-checkout/' . $data['id_pesanan']); ?>" class="btn btn-info">Pay</a>
                                         <a href="<?= site_url('pes-hapus/' . $data['id_pesanan']); ?>" class="btn btn-danger">Cancel</a>
                                     <?php else : ?>
                                         <a href="<?= site_url('print/' . $data['id_pesanan']); ?>" target="_blank" class="btn btn-info">Invoice</a>
                                     <?php endif; ?>

                                 </td>
                             </tr>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </section>
 <!--================End Cart Area =================-->