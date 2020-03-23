<?php
	session_start();
	error_reporting(E_ALL);
	if (isset($_SESSION["nama_menu"])){
		header("Location: login.php");
	}
	include "inc/koneksi.php";

	if(isset($_GET['id'])){
		if(empty($_GET['id'])){
			echo "<b> Data yang dihapus tidak ada</b>";
		}
		else{
			$delete = mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pemesanan='$_GET[id]'") or die
			("Mysql Error : ".mysqli_error($koneksi));
			if ($delete){
				header("Location: data-pemesanan.php");
			}
		}
	}
?>
