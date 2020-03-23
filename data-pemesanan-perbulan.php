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
?>
<html>
<head>
	<title>2Kang For Life | Laporan Data Pemesanan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Fast Service a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<style> 
input[type=search] {
  width: 270px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=search]:focus {
  width: 100%;
}
</style>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/style_common.css" />
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/style2.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/style-popup.css" rel="stylesheet" type="text/css" media="all"/>
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
	<div>
	<p>
		&nbsp;
	</p>
</div>
		<form id="search" action="data-pemesanan-perbulan.php" method="post" >
        	<input type="search" placeholder="Cari berdasarkan tanggal..." name="qcari">
    	</form>
<div>
	<p>
		&nbsp;
	</p>
</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<td><center>NO</center></td>
								<td><center>Nama Kategori</center></td>
								<td><center>Nama Lengkap</center></td>
								<td><center>Tanggal Perbaikan</center></td>
								<td><center>Aksi</center></td>
							</tr>
						</thead>
						<tbody>
							<?php
								$no=1;			
								$batas = 3;
								if(isset($_POST['qcari'])){
									$qcari=$_POST['qcari'];
									$result1 = mysqli_query($koneksi,"select count(*) from pemesanan where tanggal_perbaikan like '%$qcari%'");
								} else {
									$result1 = mysqli_query($koneksi, "SELECT count(*) FROM pemesanan");
								}
								$recordcount = mysqli_fetch_row($result1)[0];
								$pagecount = ceil($recordcount / $batas);
								if(!isset($_GET['page'])){
									$activepage = 1;
								} else {
									$activepage = $_GET['page'];
								}
								$mulai = $batas * ($activepage-1);
								if(isset($_POST['qcari'])){
									$qcari=$_POST['qcari'];
									$query = mysqli_query($koneksi,"SELECT  id_pemesanan, nama_kategori, nama_lengkap, tanggal_perbaikan FROM pemesanan where tanggal_perbaikan like '%$qcari%' limit $mulai, $batas");
								} else { 
									$query = mysqli_query($koneksi,"SELECT * FROM pemesanan");		
								}
								while ($menu = mysqli_fetch_array($query)) {
							?>
							<tr align="center">
								<td><p><?php echo $no; ?></p></td>
								<td><p><?php echo $menu['nama_kategori'];?></p></td>
								<td><p><?php echo $menu['nama_lengkap'];?></p></td>
								<td><p><?php echo $menu['tanggal_perbaikan'];?></p></td>
								<td><p>
								
								<a href="laporan-detail.php?id=<?php echo$menu['id_pemesanan'];?>" class="btn btn-success btn-sm" role="button">
									<i class='fa fa-file'></i> </span> Detail
								</a>

								</tr>
							<?php
								$no++;
								}
							?>	
						</tbody>
					</table>
				</div>
    			
			</div>	








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
		function status (id){
			var aksi = $('#aksistatus' + id ).val();	
			$.ajax({
				url: 'status-data-pesanan.php',
				type: 'POST',
				dataType: 'json',
				data: {
						value: aksi,
						id: id
				},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			});
			
		}



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
</body>
</html>