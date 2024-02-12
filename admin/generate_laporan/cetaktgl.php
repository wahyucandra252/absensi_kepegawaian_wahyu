<?php 
include'../../config/koneksi.php';

$tgl1 = $_POST['tgl1'];
$tgl2 = $_POST['tgl2'];
$query = "SELECT * FROM kehadiran where tanggal BETWEEN '$tgl1' AND '$tgl2'";
$sql = mysqli_query($koneksi, $query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK LAPORAN</title>
</head>
<body onload="window.print()">
<center>
<h3>Kelola Data Kehadiran</h3>
<img src="../../assets2/img/clients/logo_unikom_kuning.png" alt="" style="width: 80px;">
<br>
<br>
</center>

<center>
	<table border='1'id="dataTable" style="border: 1px solid;">
		<thead class="table-dark">
			<tr>
				<th>RFID</th>
				<th>NAMA KARYAWAN</th>
				<th>TANGGAL ABSEN</th>
				<th>JAM MASUK</th>
				<th>JAM PULANG</th>
				<th>KETERANGAN</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while ($row = mysqli_fetch_array($sql)){
				?>
				<tr>
					<td><?php echo $row['rfid']; ?></td>
					<td><?php echo $row['nama_karyawan']; ?></td>
					<td><?php echo $row['tanggal']; ?></td>
					<td><?php echo $row['jam_masuk']; ?>
	                </td><td><?php echo $row['jam_pulang']; ?></td>
	                <td><?php echo $row['keterangan']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</center>	
</body>
</html>
<br>

