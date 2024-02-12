<?php 
include'../config/koneksi.php';
// include'../config/autonumber.php';

$query = "SELECT * FROM karyawan ORDER BY nip ASC";
$sql = mysqli_query($koneksi, $query);
?>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Data Karyawan</h3>
					<hr>
					<a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
					  + Tambah Data
					</a>
					<table id="dataTable" class="table table-hover">
						<thead class="table-dark">
							<tr>
								<th>RFID</th>
								<th>NIP</th>
								<th>NAMA_KARYAWAN</th>
								<th>FOTO</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while ($row = mysqli_fetch_array($sql)){
									
							?>
							<tr>
								<td><?php echo $row['rfid']; ?></td>
								<td><?php echo $row['nip']; ?></td>
								<td><?php echo $row['nama_karyawan']; ?></td>
								<td><img src="../assets/foto/<?php echo $row['foto']; ?>" style="width: 80px;"></td>
								<td>
									<a href="home.php?menu=4&id=<?php echo $row['rfid'];?>" class="btn btn-outline-warning"><i class="fas fa-pen"></i></a>
									<a href="karyawan/hapus.php?id=<?php echo $row['rfid']; ?>" class="btn btn-outline-danger" onclick="return confirm('Apa Anda Yakin Data Ini Akan di Hapus')"><i class="fas fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA KARYAWAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="karyawan/simpan.php" class="form-group" role="form" enctype="multipart/form-data">
       
        	<label>RFID</label>
        	<input type="number" class="form-control" name="rfid" required="">

        	<label>NIP</label>
        	<input type="number" class="form-control" name="nip" required="">

        	<label>NAMA KARYAWAN</label>
        	<input type="text" class="form-control" name="nama_karyawan" required="">

        	<label>ALAMAT</label>
        	<textarea class="form-control" name="alamat"></textarea>

        	<label>FOTO</label>
        	<input type="file" class="form-control" name="foto" id="" required>

	         <div class="modal-footer">
       			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        		<button type="submit" class="btn btn-primary" onclick="return confirm('Apa Anda Yakin Untuk Menyimpan Data Ini?')">Simpan</button>
      		</div>
        </form>
      </div>
    </div>
  </div>
</div>