 <!-- JQuery DataTable Css -->
 <link href="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

 <div class="container-fluid">
     <div class="block-header">
         <h2>PRODUCTS</h2>
     </div>

     <?php if ($this->session->flashdata('success')) : ?>
         <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <?= $this->session->flashdata('success') ?>
         </div>
     <?php elseif ($this->session->flashdata('error')) : ?>
         <div class="alert alert-danger alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <?= $this->session->flashdata('error') ?>
         </div>
     <?php endif; ?>
     <div class="row clearfix">
         <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="card">
                     <div class="header">
                         <a href="<?= site_url('produk-tambah'); ?>" class="btn btn-primary"> Tambah</a>
                     </div>
                     <div class="body">
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Product</th>
                                         <th>Price</th>
                                         <th>More</th>
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>#</th>
                                         <th>Product</th>
                                         <th>Price</th>
                                         <th>More</th>
                                     </tr>
                                 </tfoot>
                                 <tbody>
                                     <?php foreach ($produk as $data) : ?>
                                         <tr>
                                             <td><?= $no++; ?></td>
                                             <td><?= $data['nama_produk']; ?></td>
                                             <td><?= $data['harga_produk']; ?></td>
                                             <td>
                                                 <a href="<?= site_url('produk-detail/' . $data['id_produk']); ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                 <a href="<?= site_url('produk-ubah/' . $data['id_produk']); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                 <a href="<?= site_url('produk-hapus/' . $data['id_produk']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i></a>
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