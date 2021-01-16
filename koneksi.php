<?php
session_start();
$nama_db = $_SESSION["NAMA_DB"] ;
$user_cloud = $_SESSION["KD_PENDAFTARAN"] ;


$server = "localhost";
$user = "root";
$pass = "";
$db = $nama_db;


$koneksi = mysql_connect($server, $user, $pass);

if ($koneksi)
	{
	//echo "Koneksi Berhasil";	
	}
else 
	{
		echo "Koneksi Gagal";
	}
	
$masuk_db = mysql_select_db($db,$koneksi)
	or die ("Database Tidak ada : ".mysql_error());

if (! isset($masuk_db))
{
	echo "
	
	<meta http-equiv='refresh' content='0;url=login.php'>";
	}
?>