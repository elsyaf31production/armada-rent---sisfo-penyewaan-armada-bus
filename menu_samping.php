<?php
session_start();
$nama_db = $_SESSION["NAMA_DB"] ;
$user_cloud = $_SESSION["KD_PENDAFTARAN"] ;
$user = $_SESSION["SES_USER"] ;
$level = $_SESSION["SES_LEVEL"] ;

if (isset($_SESSION["KD_PENDAFTARAN"]) <> "") 
{
	
	if ($level == "pemesanan")
	{include "menu_samping_pemesanan.php";}
	
	else if ($level == "pemilik")
	{include "menu_samping_pemilik.php";}
	
	
}
?>

 