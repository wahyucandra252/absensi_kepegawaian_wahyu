<?php 
include'../../config/koneksi.php';

$tgl1 = $_POST['tgl1'];
$tgl2 = $_POST['tgl2'];

// $query = "SELECT * FROM absen where tanggal_absensi BETWEEN '$tgl1' AND '$tgl2'";
// $sql = mysqli_query($koneksi, $query);

$query2 = "SELECT karyawan.nip, karyawan.nama_karyawan, absen.tanggal_absensi, absen.absensi, absen.keterangan FROM karyawan, absen WHERE karyawan.	nip = absen.nip AND tanggal_absensi BETWEEN '$tgl1' AND '$tgl2' GROUP BY tanggal_absensi ASC";
$sql2 = mysqli_query($koneksi, $query2);

// $query3 = "SELECT karyawan.nama_karyawan,  count(*) as jumlah_sakit FROM karyawan , absen where karyawan.nip = absen.nip AND absensi = 'sakit' AND tanggal_absensi BETWEEN '$tgl1' AND '$tgl2'";
// $sql3 = mysqli_query($koneksi, $query3); 
// $data3 = mysqli_fetch_array($sql3);

// $query4 = "SELECT karyawan.nama_karyawan,  count(*) as jumlah_ijin FROM karyawan , absen where karyawan.nip = absen.nip AND absensi = 'ijin' AND tanggal_absensi BETWEEN '$tgl1' AND '$tgl2'";
// $sql4 = mysqli_query($koneksi, $query4); 
// $data4 = mysqli_fetch_array($sql4);

// $query5 = "SELECT karyawan.nama_karyawan,  count(*) as jumlah_alfa FROM karyawan , absen where karyawan.nip = absen.nip AND absensi = 'alfa' AND tanggal_absensi BETWEEN '$tgl1' AND '$tgl2'";
// $sql5 = mysqli_query($koneksi, $query5); 
// $data5 = mysqli_fetch_array($sql5);

$query6 = "SELECT karyawan.nama_karyawan, SUM(CASE WHEN absen.absensi = 'sakit' THEN 1 ELSE 0 END) AS jumlah_sakit, SUM(CASE WHEN absen.absensi = 'ijin' THEN 1 ELSE 0 END) AS jumlah_ijin, SUM(CASE WHEN absen.absensi = 'alfa' THEN 1 ELSE 0 END) AS jumlah_alfa FROM karyawan JOIN absen ON karyawan.nip = absen.nip WHERE absen.tanggal_absensi IS NOT NULL GROUP BY karyawan.nama_karyawan;";
$sql6 = mysqli_query($koneksi, $query6); 
// $data6 = mysqli_fetch_array($sql6);

// $query7 = "SELECT k.nama_karyawan, COUNT(*) AS jumlah_ijin FROM karyawan k JOIN absen a ON k.nip = a.nip WHERE a.tanggal_absensi IS NOT NULL GROUP BY k.nama_karyawan AND absensi = 'ijin' AND tanggal_absensi BETWEEN '$tgl1' AND '$tgl2'";
// $sql7 = mysqli_query($koneksi, $query7); 
// $data7 = mysqli_fetch_array($sql7);

// $query8 = "SELECT k.nama_karyawan, COUNT(*) AS jumlah_alfa FROM karyawan k JOIN absen a ON k.nip = a.nip WHERE a.tanggal_absensi IS NOT NULL GROUP BY k.nama_karyawan AND absensi = 'alfa' AND tanggal_absensi BETWEEN '$tgl1' AND '$tgl2'";
// $sql8 = mysqli_query($koneksi, $query8); 
// $data8 = mysqli_fetch_array($sql8);


?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK LAPORAN</title>
</head>
<body onload="window.print()">
<center>
<h3>LAPORAN KARYAWAN YANG ABSEN</h3>
<img src="../../assets2/img/clients/logo_unikom_kuning.png" alt="" style="width: 80px;">
<br>
<br>
</center>

<center>
	<table border='1'id="dataTable" style="border: 1px solid;">
		<thead class="table-dark">
			<tr>
				<th>NIP</th>
				<th>NAMA_KARYAWAN</th>
				<th>TANGGAL ABSENSI</th>
				<th>ABSENSI</th>
				<th>KETERANGAN</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while ($data2 = mysqli_fetch_array($sql2)){
			?>
				<tr>
					<td><?php echo $data2['nip']; ?></td>
					<td><?php echo $data2['nama_karyawan']; ?></td>
					<td><?php echo $data2['tanggal_absensi']; ?></td>
					<td><?php echo $data2['absensi']; ?></td>
	               	<td><?php echo $data2['keterangan']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
	<br><br>
	<table border='1' style="border: 1px solid;">
	<thead>
		<tr>
			<th>NAMA KARYAWAN</th>
			<th>Sakit</th>
			<th>Ijin</th>
			<th>Alfa</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while ($data6 = mysqli_fetch_array($sql6)){
		?>
		<tr>
			<td align="center"><?php echo $data6['nama_karyawan'];?></td>
			<td align="center"><?php echo $data6['jumlah_sakit'];?></td>
			<td align="center"><?php echo $data6['jumlah_ijin'];?></td>
			<td align="center"><?php echo $data6['jumlah_alfa'];?></td>
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

