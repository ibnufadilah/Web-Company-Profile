<?php 

$id_produk				= $_POST['id_produk'];
$jenis_produksi		= $_POST['jenis_produksi'];
$nama_produk			= $_POST['nama_produk'];



$nama_file=$_FILES['foto']['name'];
$lokasi_file=$_FILES['foto']['tmp_name'];

move_uploaded_file($lokasi_file,"../img/produk/"."$nama_file");

$keterangan			= $_POST['keterangan'];



$query = mysqli_query($koneksi,"UPDATE produk SET
	jenis_produksi = '$jenis_produksi',
	nama_produk = '$nama_produk',
	foto = '$nama_file',
	keterangan = '$keterangan'
	WHERE id_produk = '$id_produk'
	");
if($query){
	echo '<script>alert("Berhasil mengubah data!"); document.location="index.php?hal=data_produk";</script>';
}else{
	echo '<script>alert("Gagal mengubah data!"); document.location="index.php?hal=data_produk";</script>';
}



?>


