<?php 
include ('config/koneksi.php');
// include ('config/autonumber.php');
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['submit'])){
  $rfid = $_POST['rfid'];
  $masuk = "07";
  $sudah_absen = "10";
  $keluar = "15";
  $now = date('H');

  $query = "SELECT * FROM kehadiran where rfid = '$rfid' AND tanggal = CURRENT_DATE";
  $result = mysqli_query($koneksi, $query);
  $jumlahrow = mysqli_num_rows($result);

  $q2 = "SELECT * FROM karyawan where rfid='$rfid'";
  $r2 =mysqli_query($koneksi, $q2);
  $d1 = mysqli_fetch_array($r2);
  $nama = $d1['nama_karyawan'];


  if ($jumlahrow == 0 && $now >= $masuk && $now <= $sudah_absen){
    $query2 = "INSERT INTO kehadiran VALUES ('', '$rfid', '$nama', now(), CURRENT_TIME(), '', 'TEPAT WAKTU', '1')";
    if(mysqli_query($koneksi, $query2)){
      echo "<script>
      setTimeout(function(){window.location='index.php'}, 2500);
      </script>";
    }else{
      // $error = mysqli_error($koneksi);
      // echo $error;
      echo "<script>
      setTimeout(function(){window.location='index.php'}, 2500);
      </script>";
    }

  }
  elseif ($jumlahrow == 0 && $now >= $masuk ){
    $q3 = "SELECT * FROM karyawan where rfid = '$rfid'";
    $r3 = mysqli_query($koneksi, $q3);

    if(mysqli_num_rows($r3) == 0){
      echo "<script>
      setTimeout(function(){window.location='index.php'}, 2500);
      </script>";
    }else{

      $query2 = "INSERT INTO kehadiran VALUES ('', '$rfid', '$nama', now(), CURRENT_TIME(), '', 'TERLAMBAT', '1')";
      mysqli_query($koneksi, $query2);
      echo "<script>
      setTimeout(function(){window.location='index.php'}, 2500);
      </script>";

    }
  }
  elseif($jumlahrow >= 1 && $now <= $sudah_absen){
    echo "<script>
    setTimeout(function(){window.location='index.php'}, 2500);
    </script>";
  }
  elseif($jumlahrow >= 1 && $now >= $sudah_absen && $now <= $keluar){
    $query2 = "UPDATE kehadiran set jam_pulang = CURRENT_TIME(), status ='0' WHERE rfid = '$rfid' AND tanggal = CURRENT_DATE()";
    mysqli_query($koneksi, $query2);
    echo "<script>
    setTimeout(function(){window.location='index.php'}, 2500);
    </script>";
  }
  elseif($jumlahrow = 1 && $now >= $keluar){
    $query2 = "UPDATE kehadiran set jam_pulang = CURRENT_TIME(), status ='0' WHERE rfid = '$rfid' AND tanggal = CURRENT_DATE()";
    mysqli_query($koneksi, $query2);
    echo "<script>
    setTimeout(function(){window.location='index.php'}, 2500);
    </script>";

  }
  else{
    echo "<script>
    alert('Maaf. Terjadi Error. Silahkan Hubungi Bagian Administrator Melakukan Tindak Lanjut');
    setTimeout(function(){window.location='index.php'}, 2500);
    </script>";
  }

}else {
  $rfid="";
}

error_reporting(0)
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>APLIKASI ABSENSI KARYAWAN BERBASIS WEBSITE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/main.css">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/Logo_unikom.png">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <div class="col-md-12">
    <center>
      <img src="assets/img/Logo_unikom.png" style="width: 9%; margin-top: 10px;">
      <h2>SELAMAT DATANG DI</h2>
      <h2>ABSENSI KARYAWAN BERBASIS WEBSITE DENGAN RFID</h2>
    </center>
    <div class="row"><img src="assets/img/kampus_unikom2.jpg" style="position: absolute; width: 100%; height: 75%;">
      <div class="col-md-4">
        <p style="text-align: center; font-size: 30px; font-family: monospace; color: white;" >TANGGAL</p>
        <div class="jam-digital-malasngoding">
          <div class="kotak">
            <p>
              <?php  
              echo date('d');
              ?>
            </p>
          </div>
          <div class="kotak">
           <p>
            <?php  
            echo date('m');
            ?>
          </p>
        </div>
        <div class="kotak">
         <p>
          <?php  
          echo date('y');
          ?>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <marquee><h3 style="color: white; margin-top: 90px;">APLIKASI ABSENSI KARYAWAN</h3></marquee>
  </div>
  <div class="col-md-4">
    <p style="text-align: center; font-size: 30px; font-family: monospace; color: white">WAKTU</p>
    <div class="jam-digital-malasngoding">
      <div class="kotak">
        <p id="jam"></p>
      </div>
      <div class="kotak">
        <p id="menit"></p>
      </div>
      <div class="kotak">
        <p id="detik"></p>
      </div>
    </div>
    <div class="col-sm-4">

    </div>
  </div>
</div>
<di class="container">
  <div class="row">
    <div class="col-md-6">
      <br>
      <?php
      $query2 = "SELECT * FROM karyawan where rfid = '$rfid'";
      $result2 = mysqli_query($koneksi, $query2);
      $row2 = mysqli_fetch_assoc($result2);

      $query3 = "SELECT * FROM kehadiran where rfid = '$rfid' and tanggal = CURDATE()";
      $result3 = mysqli_query($koneksi, $query3);
      $row3 = mysqli_fetch_assoc($result3);      
      ?>
      <form action="" method="POST">
        <table class="table" align="center" style="margin-left: 8%; font-family: monospace;">
          <tr>
            <td>RFID</td>
            <td>:</td>
            <td><input type="text" name="rfid" autocomplete="off" autofocus></td>
          </tr>
          <tr>
            <td>NIP</td>
            <td>:</td>
            <td><input type="text" name="" value="<?php echo $row2['nip']; ?>"></td>
          </tr>
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="" value="<?php echo $row2['nama_karyawan']; ?>" ></td>
          </tr>
          <tr>
            <td>KETERANGAN</td>
            <td>:</td>
            <td><input type="text" name="" value="<?php echo $row3['keterangan']; ?>"></td>
          </tr>
        </table>
        <button type="submit" name="submit" id="submit" style="display:none;"></button>
      </form>
    </div>
    <div class="col-2" style="display: flex; flex-direction: column; padding-left: 100px;">
      
    </div>
    <div class="col-md-4">
      <?php
      if(mysqli_num_rows($result2) == 0){
        echo '<img src="assets/img/user.png" alt="" class="img-thumbnail" style="width: 50%; height: 300px; margin-left: 110px; border-color: black; ">';
      } else{
        ?>
        <img src="assets/foto/<?php echo $row2['foto'];?>" alt="" class="img-thumbnail" style="width: 50%; height: 300px; margin-left: 110px; border-color: black; ">
        
        <?php
      }
      ?>
    </div>
  </div>
</div>
</div>
<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<script>
  window.setTimeout("waktu()", 1000);

  function waktu() {
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = waktu.getHours();
    document.getElementById("menit").innerHTML = waktu.getMinutes();
    document.getElementById("detik").innerHTML = waktu.getSeconds();
  }
</script>
</body>
</html>
