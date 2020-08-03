<?php

include 'koneksi.php';

//menangkap data id
//$id_mobil = $_POST['id_mobil'];
$plat = $_POST['plat'];
$warna = $_POST['warna'];
$merek = $_POST['merek'];
$tahun_produksi = $_POST['tahun_produksi'];
$kapasitas = $_POST['kapasitas'];

mysqli_query($koneksi, "insert into tb_mobil values(' ','$plat','$warna','$merek','$tahun_produksi','$kapasitas')");

//mengalihkan kembali ke halaman tampilan
header("location:HalamanAdminDataMobil.php");

?>
