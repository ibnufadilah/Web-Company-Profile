<?php 

$id_galeri				= $_POST['id_galeri'];


$nama_file=$_FILES['galeri']['name'];
$lokasi_file=$_FILES['galeri']['tmp_name'];

move_uploaded_file($lokasi_file,"../img/produk/"."$nama_file");





$query = mysqli_query($koneksi,"UPDATE galeri SET
	
	galeri = '$nama_file'
	
	WHERE id_galeri = '$id_galeri'
	");
if($query){
	echo '<script>alert("Berhasil mengubah data!"); document.location="index.php?hal=galeri";</script>';
}else{
	echo '<script>alert("Gagal mengubah data!"); document.location="index.php?hal=galeri";</script>';
}



?>


