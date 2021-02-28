<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Main content -->
                <div class="invoice p-3 mt-2 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <i class="fas fa-globe"></i> Sauma App
                                <small class="float-right">Date: <?= date('d M Y'); ?></small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            From
                            <address>
                                <strong>Sauma Shop.</strong><br>
                                Jl. xxx video com<br>
                                Phone: (804) 123-5432<br>
                                Email: info@example.com
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            To
                            <address>
                                <strong><?= ucfirst($detail['namaPelanggan']); ?></strong><br>

                                <?= ucfirst($detail['alamatPelanggan']); ?><br>
                                Phone: <?= $detail['notelpPelanggan']; ?><br>
                                Email: <?= $detail['emailPelanggan']; ?>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Invoice #<?= $detail['idPesanan']; ?></b><br>
                            <br>
                            <?php if ($pembayaran) : ?>
                                <b>Payment date:</b> <?= $pembayaran['createdAt']; ?><br>
                            <?php else : ?>
                                <b>Payment Status:</b> Waiting<br>
                            <?php endif; ?>
                            <b>Account:</b> <?= $detail['idPelanggan']; ?>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Qty</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Ring</th>
                                        <th>Warna</th>
                                        <th>Note Order</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $detail['qtyPesanan']; ?></td>
                                        <td><?= ucfirst($detail['namaProduk']); ?></td>
                                        <td>Rp. <?= number_format($detail['hargaProduk'], 0, ',', '.'); ?></td>
                                        <td> <?= $detail['ukuranCincin']; ?></td>
                                        <td> <?= $detail['warna']; ?></td>
                                        <td><?= ucfirst($detail['ketPesanan']); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-6">
                            <p class="lead">Payment:</p>
                            <?php if ($pembayaran) : ?>
                                <img src="<?= base_url('assets/img/bukti/' . $pembayaran['gambar']); ?>" width="300" alt="Bukti pembayaran">
                            <?php else : ?>
                                <img src="<?= base_url('assets/img/notpaid.png'); ?>" width="300" alt="Bukti pembayaran">
                            <?php endif; ?>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">
                            <p class="lead">Details</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Sub Total:</th>
                                        <td>Rp. <?= number_format($detail['hargaProduk'], 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Ongkir:</th>
                                        <td>Rp. <?= number_format($detail['ongkir'], 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Potongan:</th>
                                        <td>Rp. <?= number_format($detail['potonganOngkir'], 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Total:</th>
                                        <td>Rp. <?= number_format(($detail['qtyPesanan'] * $detail['hargaProduk']) + ($detail['ongkir'] - $detail['potonganOngkir']), 0, ',', '.'); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row no-print mt-2">
                        <div class="col-12">
                            <a href="<?= site_url('pesanan'); ?>" class="btn btn-default"><i class="fas fa-door-closed"></i>
                                Back</a>
                            <?php if ($pembayaran) : ?>
                                <button class="btn btn-info float float-right" onclick="print()"><i class="fa fa-print"> Print</i></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $('#print').click(function print() {
        window.addEventListener("load", window.print());
    });
</script>