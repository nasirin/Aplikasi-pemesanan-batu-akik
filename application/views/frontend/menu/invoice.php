<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?= base_url('assets/template/frontend/') ?>img/fav.png">
    <title>Sauma Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/template/print') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/template/print') ?>/dist/css/adminlte.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        <i class="fas fa-globe"></i> Sauma Shop
                        <small class="float-right">Date: <?= date('d M Y'); ?></small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>Sauma Shop</strong><br>
                        jl xxx video com<br>
                        Phone: 08xxxxxxxxx<br>
                        Email: saumashop@gmail.com
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong><?= ucwords($pesanan['nama_pel']); ?></strong><br>
                        <?= ucfirst($pesanan['alamat_pel']); ?><br>
                        Phone: <?= $pesanan['notelp_pel']; ?><br>
                        Email: <?= $pesanan['email_pel']; ?>
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>Invoice #<?= $pesanan['id_pesanan']; ?></b><br>
                    <br>
                    <b>Payment Date:</b> <?= date('d M Y', strtotime($pembayaran['created_konfirmasi'])); ?><br>
                    <b>Account:</b> <?= $pesanan['id_pelanggan']; ?>
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
                                <th>Note Order</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $pesanan['qty_pesanan']; ?></td>
                                <td><?= ucfirst($pesanan['nama_produk']); ?></td>
                                <td>Rp. <?= number_format($pesanan['qty_pesanan'] * $pesanan['harga_produk'], 0, ',', '.'); ?></td>
                                <td><?= $pesanan['ukuran_cincin']; ?></td>
                                <td><?= ucfirst($pesanan['ket_pesanan']); ?></td>
                                <td>Rp. <?= number_format($pesanan['qty_pesanan'] * $pesanan['harga_produk'], 0, ',', '.'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>Rp. <?= number_format($pesanan['qty_pesanan'] * $pesanan['harga_produk'], 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                                <th>Shipping:</th>
                                <td>$5.80</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>Rp. <?= number_format($pesanan['qty_pesanan'] * $pesanan['harga_produk'], 0, ',', '.'); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>