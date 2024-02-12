
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Generate Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cetak Laporan</li>
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
                <form action="generate_laporan/cetaktgl.php" method="POST" target="_blank" role="form">
                  <legend>Cetak Data Hari Ini</legend>
                
                  <div class="form-group">
                    <label for="">Dari</label>
                    <input type="date" class="form-control" id="" name="tgl1">
                  </div>

                  <div class="form-group">
                    <label for="">Ke</label>
                    <input type="date" class="form-control" id="" name="tgl2">
                  </div>
                
                
                  <button type="submit" class="btn btn-success form-control">CETAK LAPORAN</button>
                </form>
              </div>
              <div class="icon">
                <i class=""></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div>
    </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <form action="generate_laporan/cetaktgl2.php" method="POST" target="_blank" role="form">
                  <legend>Cetak Data Absensi</legend>
                
                  <div class="form-group">
                    <label for="">Dari</label>
                    <input type="date" class="form-control" id="" name="tgl1">
                  </div>

                  <div class="form-group">
                    <label for="">Ke</label>
                    <input type="date" class="form-control" id="" name="tgl2">
                  </div>
                
                
                  <button type="submit" class="btn btn-success form-control">CETAK LAPORAN</button>
                </form>
              </div>
              <div class="icon">
                <i class=""></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->