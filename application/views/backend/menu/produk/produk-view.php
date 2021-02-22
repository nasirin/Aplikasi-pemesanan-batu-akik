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
                             <!-- <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="table"> -->
                             <table class="table table-bordered table-striped table-hover" id="table">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Image</th>
                                         <th>Product</th>
                                         <th>Price</th>
                                         <th>More</th>
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>#</th>
                                         <th>Image</th>
                                         <th>Product</th>
                                         <th>Price</th>
                                         <th>More</th>
                                     </tr>
                                 </tfoot>
                                 <tbody>
                                     <?php foreach ($produk as $data) : ?>
                                         <tr>
                                             <td><?= $no++; ?></td>
                                             <td> <img src="<?= base_url('assets/img/produk/' . $data['imgProduk']); ?>" alt="" width="100" height="80"></td>
                                             <td><?= $data['namaProduk']; ?></td>
                                             <td><?= $data['hargaProduk']; ?></td>
                                             <td>
                                                 <a href="<?= site_url('produk-detail/' . $data['idProduk']); ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                 <a href="<?= site_url('produk-ubah/' . $data['idProduk']); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                 <?php if ($this->session->userdata('level') == 'super admin') : ?>
                                                     <a href="<?= site_url('produk-hapus/' . $data['idProduk']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i></a>
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


 <script src="<?= base_url('assets/template/backend/') ?>js/admin.js"></script>
 <script src="<?= base_url('assets/template/backend/') ?>js/pages/tables/jquery-datatable.js"></script>