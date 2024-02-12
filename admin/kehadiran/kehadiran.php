<?php 
include'../config/koneksi.php';
// include'../config/autonumber.php';

$query = "SELECT * FROM kehadiran ORDER BY tanggal ASC";
$sql = mysqli_query($koneksi, $query);
?>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Data Kehadiran</h3>
					<hr>
					<table id="dataTable" class="table table-hover">
						<thead class="table-dark">
							<tr>
								<th>ID_KEHADIRAN</th>
								<th>NAMA_KARYAWAN</th>
								<th>TANGGAL</th>
								<th>JAM_MASUK</th>
								<th>JAM_PULANG</th>
								<th>KETERANGAN</th>
								<th>STATUS</th>
                                <!-- <th>AKSI</th> -->
							</tr>
						</thead>
						<tbody>
							<?php 
								while ($row = mysqli_fetch_array($sql)){
									
							?>
							<tr>
								<td><?php echo $row['id_kehadiran']; ?></td>
								<td><?php echo $row['nama_karyawan']; ?></td>
								<td><?php echo $row['tanggal']; ?></td>
								<td><?php echo $row['jam_masuk']; ?></td>
								<td><?php echo $row['jam_pulang']; ?></td>
								<td><?php echo $row['keterangan']; ?></td>
								<td><?php echo $row['status']; ?></td>
								<!-- <td>
									<a href="#" class="btn btn-outline-warning"><i class="fas fa-pen"></i></a>
									<a href="#" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
								</td> -->
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