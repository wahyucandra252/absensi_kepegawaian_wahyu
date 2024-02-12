<?php  
include"../../config/koneksi.php";

$nip = $_POST['nip'];
$tanggal_absensi = $_POST['tanggal_absensi'];
$absensi = $_POST['absensi'];
$keterangan = $_POST['keterangan'];

$query="INSERT INTO absen values('','$nip','$tanggal_absensi','$absensi','$keterangan')";

if (mysqli_query($koneksi, $query)) {
	echo"
	<script>
	alert('Data Berhasil di Tambahakan');
	window.location = '../home.php?menu=5';
	</script>
	";
}else{
	echo"
	<script>
	alert('Data gagal di Tambahakan');
	window.location = '../home.php?menu=5';
	</script>
	";
}
?>