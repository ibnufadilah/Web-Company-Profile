<?php

include 'koneksi.php';

$id 			= uniqid();

$nama_file=$_FILES['galeri']['name'];
$lokasi_file=$_FILES['galeri']['tmp_name'];

move_uploaded_file($lokasi_file,"../img/produk/"."$nama_file");


$insert = mysqli_query($koneksi,"INSERT into galeri Values('$id','$nama_file')");

if($insert){
	echo '<script>alert("Berhasil Register!"); document.location="index.php?hal=galeri";</script>';
}else{
	echo '<script>alert("Gagal Upload!"); document.location="index.php?hal=galeri";</script>';
}

 ?>