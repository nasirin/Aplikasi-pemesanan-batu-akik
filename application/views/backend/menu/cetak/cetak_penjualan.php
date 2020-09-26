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
    <p class="text-center"><?= date('d M Y') ?></p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Pelanggan</th>
                <th>Produk</th>
                <th>QTY</th>
                <th>Status</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order as $value) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['id_pesanan'] ?></td>
                    <td><?= ucwords($value['nama_pel']) ?></td>
                    <td><?= ucfirst($value['nama_produk']) ?></td>
                    <td><?= $value['qty_pesanan'] ?></td>
                    <td><?= ucfirst($value['status_pesanan']) ?></td>
                    <td>Rp. <?= number_format($value['harga_produk'], 0, ',', '.') ?></td>
                </tr>
            <?php endforeach ?>
            <tr>
                <th colspan="6" class="text-center">Total</th>
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