 <!-- JQuery DataTable Css -->
 <link href="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

 <div class="container-fluid">
     <div class="block-header">
         <h2>USERS</h2>
     </div>

     <?php if ($this->session->flashdata('success')) : ?>
         <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <?= $this->session->flashdata('success') ?>
         </div>
     <?php endif; ?>

     <div class="row clearfix">
         <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="card">
                     <div class="header">
                         <a href="<?= site_url('user-tambah'); ?>" class="btn btn-primary"> Tambah</a>
                     </div>
                     <div class="body">
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Level</th>
                                         <th>Nama</th>
                                         <th>Email</th>
                                         <th>Password</th>
                                         <th>Telepon</th>
                                         <th>Status</th>
                                         <th>More</th>
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>#</th>
                                         <th>Level</th>
                                         <th>Nama</th>
                                         <th>Email</th>
                                         <th>Password</th>
                                         <th>Telepon</th>
                                         <th>Status</th>
                                         <th>More</th>
                                     </tr>
                                 </tfoot>
                                 <tbody>
                                     <?php foreach ($user->result_array() as $data) : ?>
                                         <tr>
                                             <td><?= $no++; ?></td>
                                             <td><?= $data['level']; ?></td>
                                             <td><?= $data['nama_user']; ?></td>
                                             <td><?= $data['email_user']; ?></td>
                                             <td><?= $data['pass_user']; ?></td>
                                             <td><?= $data['notelp_user']; ?></td>
                                             <td><?= $data['status_user'] != null ? "Active" : 'Non Active'; ?></td>
                                             <td>
                                                 <a href="<?= site_url('user-detail/' . $data['id_user']); ?>" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                                                 <a href="<?= site_url('user-edit/' . $data['id_user']); ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                                                 <a href="<?= site_url('user-hapus/' . $data['id_user']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin?')"><i class="fa fa-trash"></i></a>
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