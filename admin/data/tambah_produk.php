<?php 

include 'koneksi.php';

$id 			= uniqid();

$jenis_produksi		= $_POST['jenis_produksi'];
$nama_produk		= $_POST['nama_produk'];


$nama_file=$_FILES['foto']['name'];
$lokasi_file=$_FILES['foto']['tmp_name'];

move_uploaded_file($lokasi_file,"../img/produk/"."$nama_file");

$keterangan		= $_POST['keterangan'];



$insert = mysqli_query($koneksi,"INSERT into produk Values('$id','$jenis_produksi','$nama_produk','$nama_file','$keterangan')");

if($insert){
	echo '<script>alert("Berhasil Register!"); document.location="index.php?hal=data_produk";</script>';
}else{
	echo '<script>alert("Gagal Upload!"); document.location="index.php?hal=data_produk";</script>';
}

 ?>