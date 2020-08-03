<?php
include 'koneksi.php';


$id_penyewa = $_POST['id_penyewa'];
$id_mobil = $_POST['mobil'];
$cabang = $_POST['cabang'];
$waktu_mulai = $_POST['waktu_mulai'];
$waktu_selesai = $_POST['waktu_selesai'];


mysqli_query($koneksi, "insert into tb_sewa (id_sewa,id_penyewa,id_mobil,cabang,waktu_mulai,waktu_selesai) values (' ','$id_penyewa','$id_mobil','$cabang','$waktu_mulai','$waktu_selesai')");

//mengalihkan kembali ke halaman tampilan
header("location:halamanAdmin.php");

?>