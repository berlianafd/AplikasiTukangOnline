<?php
require 'inc/koneksi.php'; 
$id = $_GET['id'];


require  'inc/koneksi.php'; 
$query = mysqli_query($koneksi, "SELECT * FROM kategori_tukang WHERE id_kategori='$id'");
$kategori_tukang = mysqli_fetch_array($query);
$id_kategori = $kategori_tukang['nama_kategori'];
?>
<html>
<head>
	<title>2Kang For Life | Pemesanan</title>
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
	<link href="css/style-popup.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>
<header>
	<!-- header -->
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
</header>
<body>
<section class="contact_form py-5" >
	<div class="container">
		<div class="heading">
		<h1 class="heading text-capitalize mb-5 pb-3"><span>PEMESANAN</span></h1>
			<h4 class="position cont">TUKANG</h4>
		</div>
			<form method="POST" enctype="multipart/form-data">		
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="id_kategori" readonly="" value="<?php echo $id_kategori?>" >
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="nama_lengkap" placeholder="Nama Lengkap" required="">
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="email" class="name" name="Email" placeholder="Email" required="">
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="nohp" placeholder="Nomor HP" required="">
				</div>
				<div class="input-w3ls w3ls-rgh">
					<input type="text" class="name" name="alamat" placeholder="Alamat" required="">
				</div>				
				<div class="input-w3ls w3ls-rgh">
					<label class="name">Kecamatan</label><p></p>
					<select name="kecamatan" required="">
						<option value="Blimbing">Blimbing</option>
						<option value="Kedungkandang">Kedungkandang</option>		
						<option value="Klojen">Klojen</option>
						<option value="Lowokwaru">Lowokwaru</option>
						<option value="Sukun">Sukun</option>
					</select>
				</div>

				<div class="input-w3ls w3ls-left">
					<b><p class="name">Jenis Tukang</p></b>
				<input type='radio' class="name" name='jenis_tukang' value='Harian' required=""/>&nbsp;Harian &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			<input type='radio' class="name" name='jenis_tukang' value='Borongan' required=""/>&nbsp;Borongan
      			</div>

				<div class="input-w3ls">
					<textarea name="keterangan" placeholder="Apa yang mau diperbaiki?" required=""></textarea>
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="file" class="name" name="gambar" required="">
				</div>
				<div>
					<p>&nbsp;</p>
				</div>
				<div class="input-w3ls w3ls-left">

					 <b><p class="name">Tanggal Perbaikan</p></b>
					<input type="date" class="name" name="tgl_perbaikan" >
				</div>
				<div>
					<p>&nbsp;</p>
				</div>
				<div class="input-w3ls">
					<input type="submit"  name="submit" id="submit"  value="Pesan">
				</div>
				<!-- <a href='#popup'>pesan</a>

				<div id="popup">
					<div class="window">
						<a href="#" class="close-button" title="Close">X</a>
						<h2>Selamat Datang di DUMET School</h2>						
					</div>
				</div> -->
			</form>
	</div>
</section>

<?php
require 'inc/koneksi.php';

if (isset($_POST['submit'])) {
    $id_kategori = $_POST['id_kategori'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email      = $_POST['Email'];
    $nohp       = $_POST['nohp'];
    $alamat     = $_POST['alamat'];
    $kecamatan  = $_POST['kecamatan'];
    $jenis_tukang = $_POST['jenis_tukang'];
    $keterangan = $_POST['keterangan']; 
    $tgl_perbaikan	= $_POST['tgl_perbaikan']; 

    $usergambar = $_FILES['gambar']['name'];
    $file_size  = $_FILES['gambar']['size'];
    $file_type  = $_FILES['gambar']['type'];
    $source     = $_FILES['gambar']['tmp_name'];
    $locate     = "gambar/{$usergambar}";
    
    if($file_type != "image/gif" && $file_type != "image/jpg" && $file_type != "image/jpeg" && $file_type != "image/png")
        {
            // echo '<script language="javascript">alert ("Format Gambar Harus GIF, JPG, JPEG, PNG");';
            echo "<script type='text/javascript'>alert('Format Gambar Harus GIF, JPG, JPEG, PNG!');history.back(self);</script>";
        } 
        else
        {         
             $aksi = move_uploaded_file($source, $locate);
                if($aksi)
                {	             	


                	echo "$id_kategori"; 
                	echo "$nama_lengkap";
                	echo "$email";
                	echo "$nohp";
                	echo "$alamat"; 
                	echo "$kecamatan"; 
                	echo "$jenis_tukang"; 
                	echo "$keterangan"; 
                	// $tgl_perbaikan +$locate;

                	$query = "INSERT INTO pemesanan (`id_pemesanan`,`nama_kategori`, `nama_lengkap`, `email`,`nohp`,`alamat`,`kecamatan`, `jenis_tukang`,`keterangan`,`tanggal_perbaikan`,`gambar`) VALUES (NULL, '$id_kategori', '$nama_lengkap', '$email', '$nohp', '$alamat', '$kecamatan', '$jenis_tukang', '$keterangan', '$tgl_perbaikan', '$locate' )";
                    mysqli_query($koneksi, $query);
                    echo "<script type='text/javascript'>alert('Pemesanan Berhasil! Tunggu Kedatangan kami!');history.go(-3);</script>";
                }
        }
}
?>


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
</body>
</html>