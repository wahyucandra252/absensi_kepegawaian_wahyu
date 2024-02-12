<?php  
include"../config/koneksi.php";

$id = $_GET['id'];
$query = "SELECT * FROM absen where id_absen = '$id'";
$sql = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($sql);
?>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Form Edit Kehadiran</h3>
					<hr>
					<form action="kehadiran/edit.php" method="POST" role="form">
						<div class="form-group">
							<label for="">ID ABSEN</label>
							<input type="hidden" class="form-control" name="id_absen" id="" value="<?php echo $row['id_absen']; ?>" placeholder="ID ABSEN">
							<input type="text" class="form-control" name="id_absen" id="" value="<?php echo $row['id_absen']; ?>" placeholder="ID ABSEN" disabled>
						</div>

						<div class="form-group">
							<label for="">NIP</label>
							<input type="hidden" class="form-control" name="nip" id="" value="<?php echo $row['nip']; ?>" placeholder="NIP">
							<input type="text" class="form-control" name="nip" id="" value="<?php echo $row['nip']; ?>" placeholder="NIP" disabled>
						</div>

						<div class="form-group">
							<label for="">TANGGAL ABSENSI</label>
							<input type="date" class="form-control" name="tanggal_absensi" id="" value="<?php echo $row['tanggal_absensi']; ?>" placeholder="Tanggal Absensi">
						</div>

						<div class="form-group">
							<label for="">ABSEN</label>
							<select id="" class="form-control" name="absensi">
								<option value="<?php echo $row['absensi']; ?>"><?php echo $row['absensi']; ?></option>
                                <option value="sakit">sakit</option>
                                <option value="ijin">ijin</option>
                                <option value="alfa">alfa</option>
                            </select>
						</div>

						<div class="form-group">
							<label for="">KETERANGAN</label>
							<input type="text" class="form-control" name="keterangan" id="" value="<?php echo $row['keterangan']; ?>" placeholder="KETERANGAN">
						</div>
						<button type="submit" class="btn btn-primary" onclick="return confirm('Apa Anda Yakin Ingin Mnegubah Data Ini?') ">SIMPAN</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>