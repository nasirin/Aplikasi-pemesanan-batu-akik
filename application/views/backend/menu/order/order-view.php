 <!-- JQuery DataTable Css -->
 <link href="<?= base_url('assets/template/backend/') ?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

 <div class="container-fluid">
     <div class="block-header">
         <h2>ORDERS</h2>
     </div>


     <div class="row clearfix">
         <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="card">
                     <div class="header">
                         <a href="<?= site_url('pes-tambah'); ?>" class="btn btn-primary"> Tambah</a>
                     </div>
                     <div class="body">
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped table-hover dataTable js-exportable">
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
                                     <tr>
                                         <td>Tiger Nixon</td>
                                         <td>System Architect</td>
                                         <td>Edinburgh</td>
                                         <td>61</td>
                                         <td>2011/04/25</td>
                                         <td>
                                             <a href="" class="btn btn-info btn-sm">Detail</a>
                                         </td>
                                     </tr>
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