<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan</title>
    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">Laporan Penjualan</h1>
    <p class="text-center"><?= date('d F Y',strtotime($mulai)).' - '. date('d F Y',strtotime($sampai)) ?></p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Pelanggan</th>
                <th>Produk</th>
                <th>QTY</th>
                <th>Warna</th>
                <th>Status</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order as $value) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['idPesanan'] ?></td>
                    <td><?= ucwords($value['namaPelanggan']) ?></td>
                    <td><?= ucfirst($value['namaProduk']) ?></td>
                    <td><?= $value['qtyPesanan'] ?></td>
                    <td><?= $value['warna'] ?></td>
                    <td><?= ucfirst($value['statusPesanan']) ?></td>
                    <td>Rp. <?= number_format($value['hargaProduk'], 0, ',', '.') ?></td>
                </tr>
            <?php endforeach ?>
            <tr>
                <th colspan="7" class="text-center">Total</th>
                <td>Rp. <?= number_format($total, 0, ',', '.'); ?></td>
            </tr>
        </tbody>

    </table>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    window.addEventListener("load", window.print());
</script>

</html>