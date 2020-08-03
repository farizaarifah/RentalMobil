<?php

include 'koneksi.php';

//menangkap data id
$id_penyewa = $_GET['id_penyewa'];

mysqli_query($koneksi, "delete from tb_penyewa where id_penyewa='$id_penyewa'");

//mengalihkan kembali ke halaman tampilan
header("location:halamanAdminDataPenyewa.php");

?>