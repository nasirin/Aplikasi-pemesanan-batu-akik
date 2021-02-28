 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
     <div class="container">
         <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
             <div class="col-first">
                 <h1>Shopping Cart <?= $return ?></h1>
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
         <?php if ($this->session->flashdata('error')) : ?>
             <div class="alert alert-danger" role="alert">
                 <?= $this->session->userdata('error'); ?>
             </div>
         <?php endif; ?>
         <div class="cart_inner">
             <div class="table-responsive">
                 <table class="table">
                     <thead>
                         <tr>
                             <th scope="col">Product</th>
                             <th scope="col">Price</th>
                             <th scope="col">Quantity</th>
                             <th scope="col">Ring</th>
                             <th scope="col">Warna</th>
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
                                             <img src="<?= base_url('assets/img/produk/' . $data['imgProduk']) ?>" alt="" width="200">
                                         </div>
                                         <div class="media-body">
                                             <p><?= ucwords($data['namaProduk']); ?></p>
                                         </div>
                                     </div>
                                 </td>
                                 <td>
                                     <h5>Rp. <?= number_format($data['hargaProduk'], 0, ',', '.'); ?></h5>
                                 </td>
                                 <td>
                                     <h5><?= $data['qtyPesanan']; ?></h5>
                                 </td>
                                 <td>
                                     <h5><?= $data['ukuranCincin']; ?></h5>
                                 </td>
                                 <td>
                                     <h5><?= $data['warna']; ?></h5>
                                 </td>
                                 <td>
                                     <?php if ($data['potonganOngkir'] == 0) : ?>
                                         <h5>Rp. <?= number_format(($data['hargaProduk'] * $data['qtyPesanan']) + $data['ongkir'], 0, ',', '.'); ?></h5>
                                     <?php else : ?>
                                         <h5>Rp. <?= number_format(($data['hargaProduk'] * $data['qtyPesanan']) + ($data['ongkir'] - $data['potonganOngkir']), 0, ',', '.'); ?></h5>
                                     <?php endif; ?>

                                 </td>
                                 <td>
                                     <h5><?= ucwords($data['statusPesanan']); ?></h5>
                                 </td>
                                 <td>
                                     <?php if ($data['statusPesanan'] == 'pending') : ?>
                                         <a href="<?= site_url('shop-checkout/' . $data['idPesanan']); ?>" class="btn btn-info">Pay</a>
                                         <a href="<?= site_url('pes-hapus/' . $data['idPesanan']); ?>" class="btn btn-danger">Cancel</a>
                                     <?php else : ?>
                                         <a href="<?= site_url('print/' . $data['idPesanan']); ?>" target="_blank" class="btn btn-info">Invoice</a>
                                         <?php if ($data['statusPesanan'] == 'process') : ?>
                                             <a href="<?= site_url('pes-diterima/' . $data['idPesanan']); ?>" onclick="return confirm('Pastikan Barang anda sudah sesuai')" class="btn btn-success">Di terima</a>
                                         <?php endif; ?>
                                         <?php if ($data['statusPesanan'] == 'diterima') : ?>
                                             <a href="<?= site_url('pengajuan/' . $data['idPesanan']); ?>" class="btn btn-danger">Return</a>
                                         <?php endif; ?>
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