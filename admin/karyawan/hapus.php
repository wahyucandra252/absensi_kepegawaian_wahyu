<?php  
include'../../config/koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM karyawan where rfid='$id'";

if (mysqli_query($koneksi, $query)) {
	echo "
	<script>

	alert('Data Berhasil Di Hapus');
	window.location = '../home.php?menu=1';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal Dihapus);
	window.location = '../home.php?menu=1';
	</script>
	";
}
?>	