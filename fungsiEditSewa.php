<?php

include 'koneksi.php';

//menangkap data id
$id_sewa = $_POST['id_sewa'];
$cabang = $_POST['cabang'];
$waktu_mulai = $_POST['waktu_mulai'];
$waktu_selesai = $_POST['waktu_selesai'];



mysqli_query($koneksi, "update tb_sewa set cabang='$cabang', waktu_mulai='$waktu_mulai',waktu_selesai='$waktu_selesai' where id_sewa='$id_sewa'");

//mengalihkan kembali ke halaman tampilan
header("location:halamanAdmin.php");

?>