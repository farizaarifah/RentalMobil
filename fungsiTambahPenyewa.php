<?php

include 'koneksi.php';

// //menangkap data id
// $id_penyewa = $_POST['id_penyewa'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$nik = $_POST['nik'];
$telepon_penyewa = $_POST['telepon_penyewa'];
$email = $_POST['email'];


mysqli_query($koneksi, "insert into tb_penyewa (id_penyewa,nama,jk,alamat,nik,telepon_penyewa,email) values (' ','$nama','$jk','$alamat','$nik','$telepon_penyewa','$email')");

//mengalihkan kembali ke halaman tampilan
header("location:halamanAdminDataPenyewa.php");

?>