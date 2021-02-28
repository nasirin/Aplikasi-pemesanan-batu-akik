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
                        <strong><?= ucwords($pesanan['namaPelanggan']); ?></strong><br>
                        <?= ucfirst($pesanan['alamatPelanggan']); ?><br>
                        Phone: <?= $pesanan['notelpPelanggan']; ?><br>
                        Email: <?= $pesanan['emailPelanggan']; ?>
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>Invoice #<?= $pesanan['idPesanan']; ?></b><br>
                    <br>
                    <b>Payment Date:</b> <?= date('d M Y', strtotime($pembayaran['createdAt'])); ?><br>
                    <b>Account:</b> <?= $pesanan['idPelanggan']; ?>
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
                                <td><?= $pesanan['qtyPesanan']; ?></td>
                                <td><?= ucfirst($pesanan['namaProduk']); ?></td>
                                <td>Rp. <?= number_format($pesanan['qtyPesanan'] * $pesanan['hargaProduk'], 0, ',', '.'); ?></td>
                                <td><?= $pesanan['ukuranCincin']; ?></td>
                                <td><?= $pesanan['warna']; ?></td>
                                <td><?= ucfirst($pesanan['ketPesanan']); ?></td>
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
                                <td>Rp. <?= number_format($pesanan['qtyPesanan'] * $pesanan['hargaProduk'], 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                                <th>Ongkir:</th>
                                <td>Rp. <?= number_format($pesanan['ongkir'], 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                                <th>Potongan:</th>
                                <td>Rp. <?= number_format($pesanan['potonganOngkir'], 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>Rp. <?= number_format(($pesanan['qtyPesanan'] * $pesanan['hargaProduk']) + ($pesanan['ongkir'] - $pesanan['potonganOngkir']), 0, ',', '.'); ?></td>
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