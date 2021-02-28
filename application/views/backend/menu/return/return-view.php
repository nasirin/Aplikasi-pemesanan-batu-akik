 <!-- JQuery DataTable Css -->
 <link href="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

 <div class="container-fluid">
     <div class="block-header">
         <h2>RETURN</h2>
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
                     <div class="body">
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>ID</th>
                                         <th>Customer</th>
                                         <th>Produk</th>
                                         <th>QTY</th>
                                         <th>Note</th>
                                         <th>Status</th>
                                         <th>More</th>
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>#</th>
                                         <th>ID</th>
                                         <th>Customer</th>
                                         <th>Produk</th>
                                         <th>QTY</th>
                                         <th>Note</th>
                                         <th>Status</th>
                                         <th>More</th>
                                     </tr>
                                 </tfoot>
                                 <tbody>
                                     <?php foreach ($return as $data) : ?>
                                         <tr>
                                             <td><?= $no++; ?></td>
                                             <td><?= $data['idPesanan'] ?></td>
                                             <td><?= ucfirst($data['namaPelanggan']); ?></td>
                                             <td><?= ucfirst($data['namaProduk']); ?></td>
                                             <td><?= $data['qtyReturn']; ?></td>
                                             <td><?= ucfirst($data['alasanReturn']); ?></td>
                                             <td><?= ucfirst($data['statusReturn']); ?></td>
                                             <td>
                                                 <a href="<?= site_url('pengajuan/approve/' . $data['idReturn']); ?>" class="btn btn-cuccess btn-sm" onclick="return confirm('Apakah anda yakin APPROVE?')">Approve</a>
                                                 <a href="<?= site_url('pengajuan/reject/' . $data['idReturn']); ?>" class="btn btn-warning btn-sm" onclick="return confirm('Apakah anda yakin REJECT?')">Reject</a>
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

 <script src="<?= base_url('assets/template/backend/') ?>js/pages/tables/jquery-datatable.js"></script> -->
 <script>
     $('.js-exportable').DataTable();
 </script>