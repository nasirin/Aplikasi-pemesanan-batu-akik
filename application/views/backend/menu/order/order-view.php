 <!-- JQuery DataTable Css -->
 <link href="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

 <div class="container-fluid">
     <div class="block-header">
         <h2>ORDERS</h2>
     </div>
     <?php if ($this->session->flashdata('success')) : ?>
         <div class="alert alert-success" role="alert">
             <?= $this->session->flashdata('success'); ?>
         </div>
     <?php endif; ?>

     <div class="row clearfix">
         <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="card">
                     <div class="header">
                         <a href="" class="btn btn-primary"> Print</a>
                     </div>
                     <div class="body">
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped table-hover dataTable" id="tablepesanan">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Customer</th>
                                         <th>Produk</th>
                                         <th>Status</th>
                                         <th>Order date</th>
                                         <th>More</th>
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>#</th>
                                         <th>Customer</th>
                                         <th>Produk</th>
                                         <th>Status</th>
                                         <th>Order date</th>
                                         <th>More</th>
                                     </tr>
                                 </tfoot>
                                 <tbody>
                                     <?php foreach ($pesanan as $data) : ?>
                                         <tr>
                                             <td><?= $no++; ?></td>
                                             <td><?= ucfirst($data['nama_pel']); ?></td>
                                             <td><?= ucfirst($data['nama_produk']); ?></td>
                                             <td><?= ucfirst($data['status_pesanan']); ?></td>
                                             <td><?= date('d M Y', strtotime($data['created_pesanan'])); ?></td>
                                             <td>
                                                 <a href="<?= site_url('pes-detail/' . $data['id_pesanan']); ?>" target="_blank" class="btn btn-info btn-sm">Detail</a>
                                                 <?php if ($data['status_pesanan'] == 'process') : ?>
                                                     <a href="<?= site_url('pes-selesai/' . $data['id_pesanan']); ?>" onclick="return confirm('Apakah Pesanan Benar Selesai?')" class="btn btn-success btn-sm">Done</a>
                                                 <?php endif; ?>
                                             </td>
                                         </tr>
                                     <?php endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Jquery DataTable Plugin Js -->
 <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/jquery.dataTables.js"></script>
 <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
 <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
 <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
 <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
 <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
 <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
 <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
 <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

 <script src="<?= base_url('assets/template/backend/') ?>js/pages/tables/jquery-datatable.js"></script>
 <script>
     $('#tablepesanan').DataTable();
 </script>