<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Retturn</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= base_url(); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Return</a>
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
            <form action="<?= site_url('pengajuan/tambah/' . $return['id_pesanan']); ?>" method="post" novalidate="novalidate">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row contact-form">
                            <h3>Form Return</h3>
                            <div class="col-md-12 form-group">
                                <label for="">ID Invoice</label>
                                <input type="text" class="form-control" value="<?= $return['id_pesanan']; ?>" readonly>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Produk</label>
                                <input type="text" class="form-control" value="<?= $return['nama_produk']; ?>" readonly>
                                <input type="hidden" name="produk" value="<?= $return['id_produk']; ?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Qty</label>
                                <input type="number" min="0" class="form-control" max="<?= $return['qty_pesanan']; ?>" name="qty" placeholder="Max pengembalian <?= $return['qty_pesanan']; ?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Return Notes</label>
                                <textarea class="form-control" cols="30" rows="10" name="alasan" placeholder="Return Notes"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order # <?= $return['id_pesanan']; ?></h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                <li><a href="#"><?= ucwords($return['nama_produk']); ?> <span class="middle">x <?= $return['qty_pesanan']; ?></span> <span class="last">Rp. <?= number_format($return['qty_pesanan'] * $return['harga_produk'], 0, ',', '.'); ?></span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>Rp. <?= number_format($return['qty_pesanan'] * $return['harga_produk'], 0, ',', '.'); ?></span></a></li>
                                <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li>
                                <li><a href="#">Total <span>Rp. <?= number_format($return['qty_pesanan'] * $return['harga_produk'], 0, ',', '.'); ?></span></a></li>
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