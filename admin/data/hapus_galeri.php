<?php


$id = $_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM galeri where id_galeri = '$id'") or die(mysqli_error($koneksi));

	if($sql){
		echo '<script>alert("Berhasil menghapus data!"); document.location="index.php?hal=galeri";</script>';
	}else{
		echo '<script>alert("Gagal menghapus data!"); document.location="index.php?hal=galeri";</script>';
	}

?>