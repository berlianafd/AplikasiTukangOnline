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
require 'inc/koneksi.php'; 
$id = $_GET['id'];

require  'inc/koneksi.php'; 
$query = mysqli_query($koneksi, "SELECT * FROM kategori_tukang WHERE id_kategori='$id'");
$kategori_tukang = mysqli_fetch_array($query);
?>
<html>
<head>
	<title>2Kang For Life | Deskripsi</title>
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
	<link href="css/style2.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>

<header>
	<!-- header -->
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
</header>
<body>
	<!--/single-->
	<div class="banner_bottom read_page py-5 my-md-5">
		<div class="container">
			<div class="heading">
				<h1 class="heading text-uppercase mb-5 pb-3"><span><?php echo $kategori_tukang['nama_kategori'];?></span></h1>
				<h4 class="position cont">DESKRIPSI</h4>
			</div>
			<div class="inner_sec_info_agile_w3_info">
				<div class="read_img">
					<img src="./<?php echo $kategori_tukang['gambar'];?>" alt=" " class="img-responsive">
					<ul class="property-info mt-4">
						<li><span class="fas fa-building"></span> Biaya Tukang Harian : Rp. 150.000 /Hari /Orang</li>
						<li><span class="fas fa-building"></span> Biaya Tukang Borongan : Rp. 125.000 /Hari /Orang</li>
					</ul>
					<p class="para mt-2"><span class="fas fa-map-marker-alt"></span><strong>Address : </strong> Kota Malang</p>
					<p class="read_para"><?php echo $kategori_tukang['Deskripsi'];?></p>
				</div>
			</div>
		</div>
	</div>
	<!--//single-->


	<!-- js-scripts -->		
	<script  src="js/jquery.min.v3.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<script  src="js/move-top.js"></script>
	<script  src="js/easing.js"></script>
	<script  src="js/SmoothScroll.min.js"></script>	

	
	
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
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
		<!-- start-smoth-scrolling -->
		
		<!-- //js-scripts -->

	</body>
	<footer>
		<?php
		include"footerend.php";
		?>
	</footer>
	</html>