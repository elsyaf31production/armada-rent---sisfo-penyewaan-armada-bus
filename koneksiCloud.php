<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "db_CloudArmada";


$koneksi = mysql_connect($server, $user, $pass);

if ($koneksi)
	{
	//echo "Koneksi Berhasil";	
	}
else 
	{
		echo "Koneksi Gagal";
	}
	
mysql_select_db($db,$koneksi)
	or die ("Database Tidak ada : ".mysql_error());
?>