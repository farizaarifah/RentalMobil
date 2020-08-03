<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include 'koneksi.php';

$user=$_GET["u"];
$pwd=$_GET["p"];
$query=mysqli_query($koneksi,"select * from tb_member where nama='$user' and pwd='$pwd' ");

session_start();
	if (($_SESSION["Captcha"]=$_GET["nilaicaptcha"])&&(mysqli_num_rows($query)>0)){

		include 'halamanAdmin.php';
	}
	else {
		echo "Kode Captcha salah :)";
		echo "<br><br>";
	}

?>

</body>
</html>

