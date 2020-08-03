<?php

include 'koneksi.php';

//menangkap data id
$id_sewa = $_GET['id_sewa'];

mysqli_query($koneksi, "delete from tb_sewa where id_sewa='$id_sewa'");

//mengalihkan kembali ke halaman tampilan
//header("location:halamanAdmin.php");

?>
