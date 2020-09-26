<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laporan Pelanggan</title>
    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">Laporan Pelanggan</h1>
    <p class="text-center"><?= date('d M Y') ?></p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Tgl Daftar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pelanggan as $value) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['id_pel'] ?></td>
                    <td><?= ucwords($value['nama_pel']) ?></td>
                    <td><?= $value['email_pel'] ?></td>
                    <td><?= $value['pass_pel'] ?></td>
                    <td><?= $value['notelp_pel'] ?></td>
                    <td><?= ucfirst($value['alamat_pel']) ?></td>
                    <td><?= date('d M Y', strtotime($value['created_pel'])) ?></td>
                </tr>
            <?php endforeach ?>
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