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
$total_biaya = $jumlah_hari*150000*$jumlah_tukang;
$gambar = $kategori_tukang['gambar'];
$tanggal_perbaikan = $kategori_tukang['tanggal_perbaikan'];
$status = $kategori_tukang['status'];
?>

<html>
<head>
	<title>2Kang For Life | Data Pemesanan Detail</title>
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
		<h1 class="heading text-capitalize mb-5 pb-3"><span>DATA PEMESANAN</span></h1>
			<h4 class="position cont">TUKANG</h4>
		</div>
			<form method="POST" enctype="multipart/form-data">	
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="status" readonly="" 
						value="Status Verifikasi : <?php echo $status?>" >
				</div>	
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="id_kategori" readonly="" 
						value="<?php echo $id_kategori?>" >
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="nama_lengkap" placeholder="Nama Lengkap" 
						value="<?php echo $nama_lengkap?>"  required="">
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="email" class="name" name="email" placeholder="Email" 
						value="<?php echo $email?>" required="">
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="nohp" placeholder="Nomor HP" 
						value="<?php echo $nohp?>" required="">
				</div>
				<div class="input-w3ls w3ls-rgh">
					<input type="text" class="name" name="alamat" placeholder="Alamat" 
						value="<?php echo $alamat?>" required="">
				</div>	


				<div class="input-w3ls w3ls-rgh">
					<label class="name">Kecamatan</label><p></p>
					<select name="kecamatan" required="">
						<?php
						if ($kategori_tukang['kecamatan'] == "Lowokwaru"){
							echo "<option value='Blimbing'>Blimbing</option>		
								<option value='Kedungkandang'>Kedungkandang</option>
								<option value='Klojen'>Klojen</option>
								<option value='Lowokwaru' selected>Lowokwaru</option>	
								<option value='Sukun'>Sukun</option>";
						} else if ($kategori_tukang['kecamatan'] == "Blimbing"){
							echo "<option value='Blimbing' selected>Blimbing</option>		
								<option value='Kedungkandang'>Kedungkandang</option>
								<option value='Klojen'>Klojen</option>
								<option value='Lowokwaru' >Lowokwaru</option>	
								<option value='Sukun'>Sukun</option>";
						} else if ($kategori_tukang['kecamatan'] == "Kedungkandang"){
							echo "<option value='Blimbing' >Blimbing</option>		
								<option value='Kedungkandang' selected>Kedungkandang</option>
								<option value='Klojen'>Klojen</option>
								<option value='Lowokwaru' >Lowokwaru</option>	
								<option value='Sukun'>Sukun</option>";
						} else if ($kategori_tukang['kecamatan'] == "Klojen"){
							echo "<option value='Blimbing' >Blimbing</option>		
								<option value='Kedungkandang'>Kedungkandang</option>
								<option value='Klojen' selected>Klojen</option>
								<option value='Lowokwaru' >Lowokwaru</option>	
								<option value='Sukun'>Sukun</option>";
						} else if ($kategori_tukang['kecamatan'] == "Sukun"){
							echo "<option value='Blimbing'>Blimbing</option>		
								<option value='Kedungkandang'>Kedungkandang</option>
								<option value='Klojen'>Klojen</option>
								<option value='Lowokwaru' >Lowokwaru</option>	
								<option value='Sukun' selected>Sukun</option>";
						}
						?>
					</select>
				</div>

				<div class="input-w3ls w3ls-left">
					<b><p class="name">Jenis Tukang</p></b>
					<?php
					if ($kategori_tukang['jenis_tukang'] == "Harian"){
					?>
						<input type='radio' class="name" name='jenis_tukang' value='Harian' required="" checked="" />&nbsp;Harian 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      					<input type='radio' class="name" name='jenis_tukang' value='Borongan' required=""/>&nbsp;Borongan
						
					<?php
					} else if ($kategori_tukang['jenis_tukang'] == "Borongan"){
					?>
						<input type='radio' class="name" name='jenis_tukang' value='Harian' required="" />&nbsp;Harian 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      					<input type='radio' class="name" name='jenis_tukang' value='Borongan' required=""  checked=""/>&nbsp;Borongan
					<?php
					}
					?>
				</div>

      			<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="keterangan" placeholder="Apa yang mau diperbaiki?" 
						value="<?php echo $keterangan?>" required="">
				</div>
				
				<div class="input-w3ls w3ls-left">
					<img src="<?php echo $kategori_tukang['gambar'];?>" class="img-responsive">
				</div>
				<div>
					<p>&nbsp;</p>
				</div>
				<div class="input-w3ls w3ls-left">

					 <b><p class="name">Tanggal Perbaikan</p></b>
					<input type="date" class="name" name="tanggal_perbaikan" value="<?php echo $tanggal_perbaikan?>">
				</div>
				<div>
					<p>&nbsp;</p>
				</div>

				<?php
					if ($kategori_tukang['status'] == "berhasil"){
				?>

				<div class="input-w3ls w3ls-left">
					<b><p class="name">Jumlah Tukang</p></b>
					<input type="text" class="name" name="jumlah_tukang" placeholder="Jumlah Tukang" 
						value="<?php echo $jumlah_tukang?>" required="">
				</div>
				<div class="input-w3ls w3ls-left">
					<b><p class="name">Jumlah Hari</p></b>
					<input type="text" class="name" name="jumlah_hari" placeholder="Jumlah Hari" 
						value="<?php echo $jumlah_hari?>" required="">
				</div>
				<div class="input-w3ls w3ls-left">
					<b><p class="name">Total Biaya</p></b>
					<input type="text" class="name" name="total_biaya" placeholder="Total Biaya" 
						value="<?php echo $total_biaya?>" required="">
				</div>

				<?php
					} else if ($kategori_tukang['status'] == "gagal"){
				?>

				<div class="input-w3ls w3ls-left">
					<b><p class="name">Jumlah Tukang</p></b>
					<input type="text" class="name" name="jumlah_tukang" placeholder="Jumlah Tukang" 
						value="<?php echo $jumlah_tukang?>" readonly="">
				</div>
				<div class="input-w3ls w3ls-left">
					<b><p class="name">Jumlah Hari</p></b>
					<input type="text" class="name" name="jumlah_hari" placeholder="Jumlah Hari" 
						value="<?php echo $jumlah_hari?>" readonly="">
				</div>
				<div class="input-w3ls w3ls-left">
					<b><p class="name">Total Biaya</p></b>
					<input type="text" class="name" name="total_biaya" placeholder="Total Biaya" 
						value="<?php echo $total_biaya?>" readonly="">
				</div>

				<?php
				}
				?>

				<div>
					<p>&nbsp;</p>
				</div>
				<div class="input-w3ls">
					<input type="submit"  name="submit" id="submit"  value="Simpan Perubahan">
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
</body>
</html>