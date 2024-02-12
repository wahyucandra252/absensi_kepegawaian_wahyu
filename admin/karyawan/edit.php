<?php  
include"../../config/koneksi.php";

$rfid = $_POST['rfid'];
$nip = $_POST['nip'];
$nama_karyawan = $_POST['nama_karyawan'];
$alamat = $_POST['alamat'];

$query = "UPDATE karyawan SET nip = '$nip' , nama_karyawan='$nama_karyawan', alamat='$alamat' where rfid = '$rfid'";

if (mysqli_query($koneksi, $query)) {
	echo "
	<script>
	alert('Data Berhasil di Ubah');
	window.location = '../home.php?menu=1';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal di Ubah');
	window.location = '../home.php?menu=4';
	</script>
	";
}
?>