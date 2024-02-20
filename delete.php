<?php
include "koneksi.php";
$NO = $_GET['id'];


$del ="DELETE FROM mahasiswa where no='$NO'";
$del_query = mysqli_query($koneksi, $del);

if ($del_query){
	echo "Data Berhasil Delete";
	?>
	<a href="index.php">Lihat Daftar Mahasiswa</a>
<?php
}else{
	echo "Data Gagal diTambah";
}
?>