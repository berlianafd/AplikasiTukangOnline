<!DOCTYPE html>
<html>
<head>
	<title>2Kang For Life|Tentang Kami</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Fast Service a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>
<body>
	<header>
		<!-- header -->
		<div class="header-w3l">
			<?php
			include"navbar.php";
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

	<section class="about py-lg-5 py-md-4 py-md-3 py-2" id="about">
		<div class="about py-lg-5 py-md-4 py-md-3 py-2">
			<div class="container">
				<h3 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Tentang Kami</h3>
				<h4>KENAPA MEMILIH KAMI?</h4>					
					<div class=" resp-tabs-container">								
						<div class="row">
							<div class="col-md-6 com-sm-6 w3three_al2">
								<div class="test-wel">								
									<ul>
										<li>
											<i class="fas fa-check"></i>Tidak perlu mencari dan menyeleksi tukang yang berpengalaman atau tidak</li>
										<li>
											<i class="fas fa-check"></i>Tidak perlu membeli alat bantu kerja tukang</li>
										<li>
											<i class="fas fa-check"></i>Garansi pada pekerjaan Tukang selama 7 hari setelah tanggal pengerjaan</li>
										<li>
											<i class="fas fa-check"></i>Tidak perlu khawatir dengan identitas tukang yang datang kerumah</li>
										<li>
											<i class="fas fa-check"></i>Tidak perlu membayar ongkos berangkat tukang dari tempatnya</li>
										<li>
											<i class="fas fa-check"></i>Tidak perlu khawatir dengan kualitas pekerjaan tukang</li>
										<li>
											<i class="fas fa-check"></i>Tidak perlu menyediakan tempat tinggal tukang selama bekerja ditempat</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6 com-sm-6 w3three_al3">
								<img src="images/ab1.jpg" alt="" class="img-fluid">
							</div>												
						</div>
					</div>
			</div>
		</div>
	</section>

	<!-- Footer-->
	<section class="footer">
		<?php
		include"footerend.php";
		?>
	</section>
	<!-- /Footer-->
									
	<script  src="js/jquery.min.v3.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> <!-- Team -->
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
	</body>
	</html>