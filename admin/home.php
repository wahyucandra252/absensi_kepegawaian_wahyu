<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Absensi Karyawan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets//plugins//fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- icon -->
  <link rel="icon" type="image/png" sizes="32x32" href="../assets2/img/clients/logo_unikom_kuning.png">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../assets//plugins//tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets//plugins//icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets//plugins//jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets//dist//css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets//plugins//overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets//plugins//daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" type="text/css" href="../assets//plugins//datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets//plugins//summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-green navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../assets2/img/clients/logo_unikom_kuning.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Absensi Karyawan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist//img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION ['nama_lengkap']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <?php 
        include'sidemenu.php';
        ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- bagian if if ifan -->
    <?php  

      if(!empty($_GET['menu'])){
        $menu = $_GET['menu'];
        if($menu == 1){
          include'karyawan/karyawan.php';
        }elseif($menu == 2) {
          include'kehadiran/kehadiran.php';
        }elseif($menu == 3) {
          include'generate_laporan/cetaklaporan.php';
        }elseif($menu == 4) {
          include'karyawan/edit_form.php';
        }elseif($menu == 5) {
          include'kehadiran/absen.php';
        }elseif($menu == 6) {
          include'kehadiran/edit_form.php';
        }elseif($menu == 7) {
          include'pengaduan/pengaduan_selesai_dikerjakan.php';  
         }elseif($menu == 8) {
          include'pengaduan/pengaduanselesai.php';
        }elseif($menu == 9) {
          include'dashboard.php';
         }elseif($menu == 10) {
          include'';
        }elseif($menu == 11) {
          include'generate/cetaklaporan.php';
        }else{
          include'error.php';
        }
      }else{
        include'dashboard.php';
      }

    ?>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets//plugins//jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets//plugins//jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../assets//plugins//bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../assets//plugins//chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../assets//plugins//sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../assets//plugins//jqvmap/jquery.vmap.min.js"></script>
<script src="../assets//plugins//jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets//plugins//jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets//plugins//moment/moment.min.js"></script>
<script src="../assets//plugins//daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets//plugins//tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../assets//plugins//summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets//plugins//overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- DATA TABLES-->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- AdminLTE App -->
<script src="../assets//dist//js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets//dist//js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets//dist//js/demo.js"></script>
<script type="text/javascript">
// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});
$(document).ready(function() {
  $('#dataTable2').DataTable();
});

</script>
<script src="../assets/modal.js"></script>
</body>
</html>
