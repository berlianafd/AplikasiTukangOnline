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
	
$query = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id_pemesanan='$id'") or die( mysqli_error($koneksi) );
$kategori_tukang = mysqli_fetch_array($query);
$id_kategori = $kategori_tukang['nama_kategori'];
$nama_lengkap = $kategori_tukang['nama_lengkap'];
$email = $kategori_tukang['email'];
$alamat = $kategori_tukang['alamat'];
$nohp = $kategori_tukang['nohp'];
$kecamatan = $kategori_tukang['kecamatan'];
$jenis_tukang = $kategori_tukang['jenis_tukang'];
$keterangan = $kategori_tukang['keterangan'];
$jumlah_tukang = $kategori_tukang['jumlah_tukang'];
$jumlah_hari = $kategori_tukang['jumlah_hari'];
$total_biaya = ($jumlah_hari*75000*$jumlah_tukang)-($jumlah_hari*75000*$jumlah_tukang*0.1);
$gambar = $kategori_tukang['gambar'];
$tanggal_perbaikan = $kategori_tukang['tanggal_perbaikan'];

$tanggal_perbaikan=date("Y-m-d");
$newtanggal_perbaikan=strtotime($tanggal_perbaikan);
$jumlah_hari;
$NewjumlahHari=86400*$jumlah_hari;
$hasilJumlah = $newtanggal_perbaikan + $NewjumlahHari;
$tanggal_selesai=date("Y-m-d",$hasilJumlah);

$status = $kategori_tukang['status'];

?>

<html>
<head>
	<title>2Kang For Life | Laporan Data Pemesanan</title>
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
<section class="contact_form py-5" >
	<div class="container">
		<div class="heading">
		<h1 class="heading text-capitalize mb-5 pb-3"><span>LAPORAN</span></h1>
			<h4 class="position cont">DATA PEMESANAN</h4>
		</div>
			<form method="POST" enctype="multipart/form-data">	
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="status" readonly="" 
						value="Status Verifikasi &nbsp;: <?php echo $status?>" >
				</div>	
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="id_kategori" readonly="" 
						value="Nama Kategori &nbsp;&nbsp;&nbsp;: <?php echo $id_kategori?>" >
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="nama_lengkap" placeholder="Nama Lengkap" 
						value="Nama Lengkap &nbsp;&nbsp;&nbsp;: <?php echo $nama_lengkap?>"  readonly="">
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="email" class="name" name="email" placeholder="Email" 
						value="Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $email?>" readonly="">
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="nohp" placeholder="Nomor HP" 
						value="Nomor HP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $nohp?>" readonly="">
				</div>
				<div class="input-w3ls w3ls-rgh">
					<input type="text" class="name" name="alamat" placeholder="Alamat" 
						value="Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $alamat?>" readonly="">
				</div>	
				<div class="input-w3ls w3ls-rgh">
					<input type="text" class="name" name="kecamatan" placeholder="Kecamatan" 
						value="Kecamatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $kecamatan?>" readonly="">
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="jenis_tukang" placeholder="Jenis Tukang" 
						value="Jenis Tukang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $jenis_tukang?>" readonly="">
				</div>	
      			<div class="input-w3ls w3ls-left">
				<input type="text" class="name" name="keterangan" placeholder="Apa yang mau diperbaiki?" 
						value="Keterangan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $keterangan?>" readonly="">
				</div>
				<div class="input-w3ls w3ls-rgh">
					<input type="text" class="name" name="tanggal_perbaikan"  
						value="Tanggal Perbaikan : <?php echo $tanggal_perbaikan?>" readonly="">
				</div>	
				<div class="input-w3ls w3ls-rgh">
					<input type="text" class="name" name="tanggal_selesai" 
						value="Tanggal Selesai : <?php echo $tanggal_selesai?>" readonly="">
				</div>

				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="jumlah_tukang" readonly="" 
						value="Jumlah Tukang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $jumlah_tukang?>" >
				</div>	
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="jumlah_hari" readonly="" 
						value="Jumlah Hari &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $jumlah_hari?>" >
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="total_biaya" readonly="" 
						value="Total Biaya &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $total_biaya?>" >
				</div>	
				<div class="input-w3ls w3ls-left">
					<img src="<?php echo $kategori_tukang['gambar'];?>" class="img-responsive">
				</div>	
				<div>
					<p>&nbsp;</p>
				</div>
			</form>
	</div>
</section>

<?php
require 'inc/koneksi.php';

if (isset($_POST['submit'])) {
    $id_kategori = $_POST['id_kategori'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email      = $_POST['email'];
    $nohp       = $_POST['nohp'];
    $alamat     = $_POST['alamat'];
    $kecamatan  = $_POST['kecamatan'];
    $jenis_tukang = $_POST['jenis_tukang'];
    $keterangan = $_POST['keterangan']; 
    $tgl_perbaikan	= $_POST['tanggal_perbaikan'];
    $jumlah_tukang	= $_POST['jumlah_tukang'];
    $jumlah_hari	= $_POST['jumlah_hari'];
    $total_biaya	= $_POST['total_biaya'];


    $usergambar = $_FILES['gambar']['name'];
    $file_size  = $_FILES['gambar']['size'];
    $file_type  = $_FILES['gambar']['type'];
    $source     = $_FILES['gambar']['tmp_name'];
    $locate     = "gambar/{$usergambar}";
    
    // if($file_type != "image/gif" && $file_type != "image/jpg" && $file_type != "image/jpeg" && $file_type != "image/png")
    //     {
    //         // echo '<script language="javascript">alert ("Format Gambar Harus GIF, JPG, JPEG, PNG");';
    //         echo "<script type='text/javascript'>alert('Format Gambar Harus GIF, JPG, JPEG, PNG!');history.back(self);</script>";
    //     } 
    //     else
    //     {         
    //          $aksi = move_uploaded_file($source, $locate);
    //             if($aksi)
    //             {	             	
                	$query = "UPDATE pemesanan SET `nama_lengkap`='$nama_lengkap', `email`='$email',`nohp`='$nohp',`alamat`='$alamat',`kecamatan`='$kecamatan', `jenis_tukang`='$jenis_tukang',`keterangan`='$keterangan',`tanggal_perbaikan`='$tgl_perbaikan',`jumlah_tukang`='$jumlah_tukang', `jumlah_hari`='$jumlah_hari', `total_biaya`='$total_biaya' WHERE id_pemesanan='$id'";
                    mysqli_query($koneksi, $query);

                    echo "<script type='text/javascript'>alert('Perubahan Berhasil!');history.go(-1);</script>";
                // }
        }
// }
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

</html>