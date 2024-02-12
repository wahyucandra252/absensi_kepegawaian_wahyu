<?php  
include'../../config/koneksi.php';

$rfid = $_POST['rfid'];
$nip = $_POST['nip'];
$nama_karyawan = $_POST['nama_karyawan'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "../../assets/foto/".$fotobaru;

if(move_uploaded_file($tmp_foto, $path)) {

	$query = "INSERT INTO karyawan values ('$rfid','$nip','$nama_karyawan','$alamat','0','0','0','$fotobaru')";

	if (mysqli_query($koneksi, $query)) {
		echo "
		<script>
		alert('Data Berhasil Disimpan');
		window.location = '../home.php?menu=1';
		</script>
		";
		}else{
			echo "
		<script>
		alert('Maaf terjadi kesalahan');
		window.location = '../home.php?menu=1';
		</script>
		";
		}
	}else{
	echo "
	<script>
	alert('Data Gagal Disimpan');
	window.location = '../home.php?menu=1';
	</script>
	";
	}
?>