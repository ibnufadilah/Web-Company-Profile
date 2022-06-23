<!-- <?php
if($_POST['kirim']){
	$admin = 'ibnufadilah07@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['nama']);
	$hp	= htmlentities($_POST['hp']);
	$alamat	= htmlentities($_POST['alamat']);
	$usermail	= htmlentities($_POST['usermail']);
	$pesan	= htmlentities($_POST['pesan']);

	$pengirim	= 'Dari: '.$nama.' <'.$usermail.'>';
	
	if(mail($admin, $hp, $alamat, $pesan, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
	}
}else{
	header("Location: index.php");
}
?> -->

<?php

$nama= $_POST['nama'];
$hp= $_POST['hp'];
$alamat= $_POST['alamat'];
$usermail= $_POST['usermail'];
$pesan= $_POST['pesan'];
$body= "
Nama : $nama <br/>
HP : $hp <br/>
Alamat: $alamat <br/>
Email: $usermail <br/>
Pesan: $pesan <br/>
";

function Send_Mail($to,$subject,$body)
{
require 'PHPmailer/class.phpmailer.php';

 

$usermail= $_POST['usermail'];
$mail = new PHPMailer();
$mail->IsMail(true); // SMTP
$mail->SMTPAuth = true; // SMTP authentication
$mail->Host= "smtp.gmail.com";
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SetFrom("email@gmail.com","email sender");
$mail->Username = "ibnufadilah07@gmail.com"; // username gmail yang akan digunakan untuk mengirim email
$mail->Password = "juple1998"; // Password email
$mail->SetFrom($usermail, 'user');
$mail->AddReplyTo($usermail,'user');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->AddAddress($usermail);
if(!$mail->Send())
return false;
else
return true;

}

$to = "ibnufadilah07@gmail.com"; //email tujuan
$subject = "New email"; // subject email
echo"<br/><br/><center><h3>email telah terkirim</h3></center>";
Send_Mail($to,$subject,$body);
?>