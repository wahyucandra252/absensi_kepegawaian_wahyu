<?php  
include"../../config/koneksi.php";

$id_absen = $_POST['id_absen'];
$nip = $_POST['nip'];
$tanggal_absensi = $_POST['tanggal_absensi'];
$absensi = $_POST['absensi'];
$keterangan = $_POST['keterangan'];

$query = "UPDATE absen SET nip = '$nip', tanggal_absensi = '$tanggal_absensi', absensi='$absensi', keterangan='$keterangan' where id_absen = '$id_absen'";

if (mysqli_query($koneksi, $query)) {
	echo "
	<script>
	alert('Data Berhasil di Ubah');
	window.location = '../home.php?menu=5';
	</script>	
	";
}else{
	echo "
	<script>
	alert('Data Gagal di Ubah');
	window.location = '../home.php?menu=5';
	</script>
	";
}
?>