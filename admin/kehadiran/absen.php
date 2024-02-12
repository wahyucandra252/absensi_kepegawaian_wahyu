<?php 
include'../config/koneksi.php';
// include'../config/autonumber.php';

$query = "SELECT * FROM absen ORDER BY tanggal_absensi ASC";
$sql = mysqli_query($koneksi, $query);
?>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Data Absensi</h3>
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					  + Tambah Data
					</a>
					<hr>
					<table id="dataTable" class="table table-hover">
						<thead class="table-dark">
							<tr>
								<th>NIP</th>
								<th>TANGGAL</th>
								<th>ABSENSI</th>
								<th>KETERANGAN</th>
                                <th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while ($row = mysqli_fetch_array($sql)){
									
							?>
							<tr>
								<td><?php echo $row['nip']; ?></td>
								<td><?php echo $row['tanggal_absensi']; ?></td>
								<td><?php echo $row['absensi']; ?></td>
								<td><?php echo $row['keterangan']; ?></td>
								<td>
									<a href="home.php?menu=6&id=<?php echo $row['id_absen']; ?>" class="btn btn-outline-warning"><i class="fas fa-pen"></i></a>
									<a href="kehadiran/hapus.php?id=<?php echo $row['id_absen']; ?>" class="btn btn-outline-danger" onclick="return	confirm('Apa Anda Yakin Mengahapus Data Ini?')"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
							<?php 
								}
							?>
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</div>	
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA KEHADIRAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="kehadiran/simpan.php" class="form-group">	

        	<label>RFID</label>
      		<select class="form-control" name="nip">
                	<option>---- Silahkan Pilih ----</option>
                	<?php
		                include "../config/koneksi.php";
		                //query menampilkan nama unit kerja ke dalam combobox
		                $query3 = "SELECT * FROM karyawan ORDER BY nip";
		                $sql3 = mysqli_query($koneksi, $query3);
		                while ($data3 = mysqli_fetch_array($sql3)) {
		            ?>
                	<option value="<?=$data3['nip'];?>"><?php echo $data3['nip'];?> - <?php echo $data3['nama_karyawan'];?>  </option>
                	<?php 
                		}
                	?>
             </select>
       
        	<label>TANGGAL</label>
        	<input type="date" class="form-control" name="tanggal_absensi">

        	<label>ABSEN</label>
	         <select name="absensi" id="" class="form-control" required>
	         	<option value="">--- Silahkan Pilih ---</option>
	         	<option value="sakit">Sakit</option>
	         	<option value="ijin">Ijin</option>
	         	<option value="alfa">Alfa</option>
	        </select>

	        <label>KETERANGAN</label>
	        <textarea class="form-control" name="keterangan"></textarea>

	         <div class="modal-footer">
       			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        		<button type="submit" class="btn btn-primary" onclick="return confirm('Apa Anda Yakin Untuk Menyimpan Data Ini?')">Simpan</button>
      		</div>
        </form>
      </div>
    </div>
  </div>
</div>