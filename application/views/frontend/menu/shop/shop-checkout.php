<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Checkout</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= base_url(); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <?php if ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->userdata('error'); ?>
            </div>
        <?php endif; ?>
        <div class="billing_details">
            <form action="<?= site_url('pes-confirm/' . $pesanan['idPesanan']); ?>" method="post" novalidate="novalidate" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row contact-form">
                            <h3>Billing Details</h3>
                            <div class="col-md-12 form-group">
                                <label for="">Bukti pebayaran <span class="text-danger">*</span> </label>
                                <input type="file" class="form-control" id="number" name="bukti" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" cols="30" rows="10" name="keterangan" id="message" rows="1" placeholder="Order Notes"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order # <?= $pesanan['idPesanan']; ?></h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                <li><a href="#"><?= ucwords($pesanan['namaProduk']); ?> <span class="middle">x <?= $pesanan['qtyPesanan']; ?></span> <span class="last">Rp. <?= number_format($pesanan['qtyPesanan'] * $pesanan['hargaProduk'], 0, ',', '.'); ?></span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>Rp. <?= number_format($pesanan['qtyPesanan'] * $pesanan['hargaProduk'], 0, ',', '.'); ?></span></a></li>
                                <li><a href="#">Ongkir <span><?= 'Rp ' . number_format($pesanan['ongkir'], 0, ',', '.') ?></span></a></li>
                                <li><a href="#">Potongan 5% <span><?= 'Rp ' . number_format($pesanan['potonganOngkir'], 0, ',', '.') ?></span></a></li>
                                <li><a href="#">Total <span>Rp. <?= number_format(($pesanan['qtyPesanan'] * $pesanan['hargaProduk']) +($pesanan['ongkir']-$pesanan['potonganOngkir']), 0, ',', '.'); ?></span></a></li>
                            </ul>
                            <div class="payment_item">
                                <p>Pastikan bukti pembayaran sudah sesuai</p>
                            </div>
                            <!-- <a class="primary-btn" href="#">Proceed to Paypal</a> -->
                            <button type="submit" class="primary-btn btn-block" style="border: none;">Proceed to Paypal</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->