<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="icon" type="image" href="img/logo.png" >
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>ARDELY CAR</title>

	

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
				<div class="logo"><a href="javascript:void(0)"><img src="img/logo.png" width="100" alt=""></a><b> ARDELY CAR </b></div>
				<a class="res-nav_click animated wobble wow" href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
		</div>
	</header>
	<!--Header_section-->

	<!--Top_content-->
	<section id="top_content" class="top_cont_outer">
		<div class="top_cont_inner">
			<div class="container">
				<div class="top_content">
					<div class="row">
						<div class="col-lg-5 col-sm-7">
							<div class="top_left_cont flipInY wow animated">
								<h3>Mudah &amp; Terpercaya!</h3>
								<h2>Selamat Datang di halaman Admin ARDELY CAR</h2>
								<a href="login.php" class="learn_more2">Masuk</a> </div>
						</div>
						<div class="col-lg-7 col-sm-5"> </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Top_content-->



	<footer class="footer_section" id="contact">

		<div class="container">
			<div class="footer_bottom">
				<span>© ArdelyCar</span>
				<div class="credits">
					<!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Butterfly
          -->
					Designed by <a href="">Ardely</a>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#header_outer').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

		});
	</script>
	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
		document.getElementById('').onclick = function() {
			var section = document.createElement('section');
			section.className = 'wow fadeInDown';
			section.className = 'wow shake';
			section.className = 'wow zoomIn';
			section.className = 'wow lightSpeedIn';
			this.parentNode.insertBefore(section, this);
		};
	</script>
	<script type="text/javascript">
		$(window).load(function() {

			$('a').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 91
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			// Portfolio Isotope
			var container = $('#portfolio-wrap');


			container.isotope({
				animationEngine: 'best-available',
				animationOptions: {
					duration: 200,
					queue: false
				},
				layoutMode: 'fitRows'
			});

			$('#filters a').click(function() {
				$('#filters a').removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				container.isotope({
					filter: selector
				});
				setProjects();
				return false;
			});


			function splitColumns() {
				var winWidth = $(window).width(),
					columnNumb = 1;


				if (winWidth > 1024) {
					columnNumb = 4;
				} else if (winWidth > 900) {
					columnNumb = 2;
				} else if (winWidth > 479) {
					columnNumb = 2;
				} else if (winWidth < 479) {
					columnNumb = 1;
				}

				return columnNumb;
			}

			function setColumns() {
				var winWidth = $(window).width(),
					columnNumb = splitColumns(),
					postWidth = Math.floor(winWidth / columnNumb);

				container.find('.portfolio-item').each(function() {
					$(this).css({
						width: postWidth + 'px'
					});
				});
			}

			function setProjects() {
				setColumns();
				container.isotope('reLayout');
			}

			container.imagesLoaded(function() {
				setColumns();
			});


			$(window).bind('resize', function() {
				setProjects();
			});

		});
		$(window).load(function() {
			jQuery('#all').click();
			return false;
		});
	</script>
	<script src="contactform/contactform.js"></script>

</body>
</html>
