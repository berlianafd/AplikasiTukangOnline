<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}

@ini_set('output_buffering',0);
set_time_limit(0);
error_reporting(0);

    if (!isset($_SESSION['password']) || !isset($_SESSION['username'])) {     
        session_unset();
        header("Location:login.php");
        exit;
    }

require_once 'inc/koneksi.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title> 2Kang For Life | Portofolio </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Fast Service a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/style_common.css" />
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>
<body>
	<header>
		<!-- header -->
		<div class="header-w3l">
			<?php
			include"navbar-admin.php";
			?>
		<!-- //header -->

			<!-- banner -->
			<!-- banner-slider -->
			<div class="w3l_banner_info">
				<div class="slider1">
					<div class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="slider1-img">
									<div class="slider_banner_info">								
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- //banner-slider -->
		</div>
	</header>

	<!--gallery  -->
	<section class="wthree-row w3-gallery py-lg-5 py-md-4 py-md-3 py-2" id="gallery">
		<div class="container-fluid py-lg-5 py-md-4 py-md-3 py-2 text-center">
			<h3 class="heading text-center text-uppercase mb-lg-5 mb-md-4 mb-sm-3 mb-3">Portofolio</h3>
			<ul class="portfolio-categ filter mb-lg-5 mb-md-4 mb-sm-3 mb-3 text-center">
				<li class="port-filter all active">
					<a href="#">Semua</a>
				</li>
				<li class="cat-item-1">
					<a href="#" title="Category 1">Mekanikal Elektrikal</a>
				</li>
				<li class="cat-item-2">
					<a href="#" title="Category 2">Bangunan</a>
				</li>
				<li class="cat-item-3">
					<a href="#" title="Category 3">Interior</a>
				</li>
				<li class="cat-item-4">
					<a href="#" title="Category 4">Landscape</a>
				</li>
			</ul>
			<ul class="portfolio-area clearfix">
				<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
					<div>
						<span class="image-block img-hover">
							<a class="image-zoom" href="images/g1.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g1.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g2.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g2.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g3.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g3.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g4.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g4.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g5.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g5.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g6.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g6.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g7.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g7.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g8.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g8.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-9" data-type="cat-item-4">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g9.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g9.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-9" data-type="cat-item-3">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g10.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g10.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-10" data-type="cat-item-2">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g11.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g11.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-8" data-type="cat-item-1">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g12.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g12.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-9" data-type="cat-item-3">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g10.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g10.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-10" data-type="cat-item-2">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g1.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g1.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-8" data-type="cat-item-1">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/g3.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/g3.jpg" class="img-fluid w3layouts agileits" alt="">

							</a>
						</span>
					</div>
				</li>
			</ul>
			<!--end portfolio-area -->

		</div>
		<!-- //gallery container -->
	</section>
	<!-- //gallery -->


	<!-- Footer-->
	<?php
	include"footerend.php";
	?>
	<!-- /Footer-->

	<script  src="js/jquery.min.v3.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<script  src="js/move-top.js"></script>
	<script  src="js/easing.js"></script>
	<script  src="js/SmoothScroll.min.js"></script>	


	
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!-- //here ends scrolling icon -->
		<!-- scrolling script -->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script> 
		<script type="text/javascript">
			$(function () {
				$('[data-toggle="popover"]').popover()
			})
		</script> 
		<!-- //scrolling script -->
		<!--//start-smoth-scrolling -->

		<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
		<script src="js/jquery-1.7.2.js"></script>
		<script src="js/jquery.quicksand.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

	</body>
	</html>