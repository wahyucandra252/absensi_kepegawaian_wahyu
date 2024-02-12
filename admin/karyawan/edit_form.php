<?php  
include"../config/koneksi.php";

$id = $_GET['id'];
$query = "SELECT * FROM karyawan where rfid = '$id'";
$sql = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($sql);
?>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Form EDIT KARYAWAN</h3>
					<hr>
					<form action="karyawan/edit.php" method="POST" role="form">
					
						<div class="form-group">
							<label for="">RFID</label>
							<input type="text" class="form-control" name="rfid" id="" value="<?php echo $row['rfid']; ?>" placeholder="RFID">
						</div>

						<div class="form-group">
							<label for="">NIP</label>
							<input type="text" class="form-control" name="nip" id="" value="<?php echo $row['nip']; ?>" placeholder="NIP">
						</div>

						<div class="form-group">
							<label for="">NAMA KARYAWAN</label>
							<input type="text" class="form-control" name="nama_karyawan" id="" value="<?php echo $row['nama_karyawan']; ?>" placeholder="NAMA KARYAWAN">
						</div>

						<div class="form-group">
							<label for="">ALAMAT</label>
							<input type="text" class="form-control" name="alamat" id="" value="<?php echo $row['alamat']; ?>" placeholder="ALAMAT">
						</div>

						<button type="submit" class="btn btn-primary" onclick="return confirm('Apa Anda Yakin Ingin Mnegubah Data Ini?') ">SIMPAN</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>