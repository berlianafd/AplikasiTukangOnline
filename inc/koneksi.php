<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "tukang";
/*$connection = mysqli_connect($host,$user,$db, $password);
if (!$connection) {
    die("Database connection failed: " . mysqli_error());
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection, $db);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}*/
$koneksi = mysqli_connect($host, $user, $password) or die(mysqli_error());
$db_select = mysqli_select_db($koneksi, $db) or die(mysqli_error($koneksi));
//$db_select = mysqli_select_db($koneksi, $db) or die (mysqli_error($koneksi)); 
?>