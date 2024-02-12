<?php 
include'../config/koneksi.php';

$query5 = "SELECT count(*) as jumlah_karyawan FROM Karyawan";
$sql5 = mysqli_query($koneksi, $query5);
$hasil5 = mysqli_fetch_array($sql5);

// $query6 = "SELECT count(*) as jumlah_pengaduan FROM pengaduan WHERE status = 'dikerjakan'";
// $sql6 = mysqli_query($koneksi, $query6);
// $hasil6 = mysqli_fetch_array($sql6);

// $query7 = "SELECT count(*) as jumlah_pengaduan FROM pengaduan WHERE status = 'selesai dikerjakan'";
// $sql7 = mysqli_query($koneksi, $query7);
// $hasil7 = mysqli_fetch_array($sql7);
?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $hasil5['jumlah_karyawan'];?></h3>

                <p>Data Karyawan</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="home.php?menu=1" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->