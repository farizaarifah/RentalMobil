<!DOCTYPE html>
<html>
<head>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Halaman Admin</title>
		<meta charset="utf-8">
	<link rel="icon" type="image" href="img/logoRent2.png" >
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/linecons.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">

	<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>

	<script type="text/javascript">
		$(document).ready(function(e) {
			$('.res-nav_click').click(function() {
				$('ul.toggle').slideToggle(600)
			});

			$(document).ready(function() {
				$(window).bind('scroll', function() {
					if ($(window).scrollTop() > 0) {
						$('#header_outer').addClass('fixed');
					} else {
						$('#header_outer').removeClass('fixed');
					}
				});

			});

		});

		function resizeText() {
			var preferredWidth = 767;
			var displayWidth = window.innerWidth;
			var percentage = displayWidth / preferredWidth;
			var fontsizetitle = 25;
			var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
			$(".divclass").css("font-size", newFontSizeTitle)
		}
	</script>
</head>

<body>

	<!--Header_section-->
	<header id="header_outer">
		<div class="container">
			<div class="header_section">
				<div class="logo"><a href="javascript:void(0)"><img src="img/logo.png" width="140" alt=""></a></div>
				<nav class="nav" id="nav">
					
					<ul class="toggle">
						<li><a href="halamanAdmin.php">Data Sewa</a></li>
						<li><a href="halamanAdminDataPenyewa.php">Penyewa</a></li>
						<li><a href="halamanAdminDataMobil.php">Mobil</a></li>
						<li><a href="halamanAdminKontak.php">Kontak Kami</a></li>
						<li><a href="logout.php" class="learn_more2">Log out</a></li>
					</ul>
					<ul class="">
						<li><a href="halamanAdmin.php">Data Sewa</a></li>
						<li><a href="halamanAdminDataPenyewa.php">Penyewa</a></li>
						<li><a href="halamanAdminDataMobil.php">Mobil</a></li>
						<li><a href="halamanAdminKontak.php">Kontak Kami</a></li>
						<li><a href="logout.php" class="learn_more2">Log out</a></li>

					</ul>
				</nav>
				<a class="res-nav_click animated wobble wow" href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
		</div>
	</header>
	<!--Header_section-->

	<div class="row" style="margin-top: 10px">
		<div class="col-md-1"></div>
		<div class="col-md-10">

			<h2>DATA PENYEWA</h2>
			<a href="FormTambahPenyewa.php" type="button" class="btn btn-warning">Tambah</a>

			<table class="table table-bordered" style="padding-top: 5 px">
			  <thead style="background-color: #AFEEEE">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Id Penyewa</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Jenis Kelamin</th>
			      <th scope="col">Alamat</th>
			      <th scope="col">NIK</th>
			      <th scope="col">No. HP</th>
			      <th scope="col">Email</th>
			      <th scope="col">Tindakan</th>

			    </tr>
			  </thead>
			  <tbody>
			    <?php 
			    include 'koneksi.php';
			    $no = 1;
			    $data = mysqli_query($koneksi,"select * from tb_penyewa");
			    while ($d = mysqli_fetch_array($data)) {
			      
			    ?>
			    <tr>
			      <th scope="row"><?php echo $no++;  ?></th>
			      <td><?php echo $d['id_penyewa'];  ?></td>
			      <td><?php echo $d['nama'];  ?></td>
 			      <td><?php  echo $d['jk']; ?></td>
			      <td><?php   echo $d['alamat']; ?></td>
			      <td><?php   echo $d['nik']; ?></td>
			      <td><?php   echo $d['telepon_penyewa']; ?></td>
			      <td><?php   echo $d['email']; ?></td>
			      <td>
			      	<a href="fungsiHapusPenyewa.php?id_penyewa=<?php echo $d['id_penyewa']; ?>"type="button" class="btn btn-danger">Hapus</a>
			      </td>
			    </tr>

			    <?php }?>
			  </tbody>
			</table>
			
		</div>
		<div class="col-md-1"></div>


	</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>