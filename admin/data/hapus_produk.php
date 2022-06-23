<?php


$id = $_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM produk where id_produk = '$id'") or die(mysqli_error($koneksi));

	if($sql){
		echo '<script>alert("Berhasil menghapus data!"); document.location="index.php?hal=data_produk";</script>';
	}else{
		echo '<script>alert("Gagal menghapus data!"); document.location="index.php?hal=data_produk";</script>';
	}

?>