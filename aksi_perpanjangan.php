<?php
require 'koneksiCloud.php';

if(isset($_POST['kirim'])) {
	
	
	$kd_pendaftaran	= $_POST['kd_pendaftaran'];
	$jns_pakai	= $_POST['jns_pakai'];
	$jml_uang	= $_POST['jml_transfer'];
	$no_rek	= $_POST['no_rek'];
	$an_rek	= $_POST['an_rek'];
	$tgl_masuk = date("Y-m-d");
		$query_simpan =	mysql_query("INSERT INTO log_masapakai (kd_pendaftaran, jns_pakai, jml_uang, no_rek, an_rek, tgl_masuk, respon) VALUES('$kd_pendaftaran', '$jns_pakai','$jml_uang','$no_rek','$an_rek','$tgl_masuk','mulai')") or die (mysql_error());


if ($query_simpan) {
	
	/*echo "
    <div class='alert alert-success alert-dismissable text-center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                             Kirim data transfer sukses, silahkan tunggu untuk diktifkan</div>
    ";*/
	echo"<script>alert('Kirim data transfer sukses, silahkan tunggu untuk diktifkan')</script>";
	echo"<meta http-equiv='refresh' content='0;url=index.php'>";
   
	}
	else 
	{
		/*echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                              Kirim data transfer gagal </div> ";*/
	echo"<script>alert('Kirim data transfer gagal')</script>";
	echo"<meta http-equiv='refresh' content='0;url=index.php'>";
		}
	
}


if(isset($_POST['kirim_lanjut'])) {
	
	
	$kd_pendaftaran	= $_POST['kd_pendaftaran'];
	$jns_pakai	= $_POST['jns_pakai'];
	$jml_uang	= $_POST['jml_transfer'];
	$no_rek	= $_POST['no_rek'];
	$an_rek	= $_POST['an_rek'];
	$tgl_masuk = date("Y-m-d");
	
		$query_simpan =	mysql_query("INSERT INTO log_masapakai (kd_pendaftaran, jns_pakai, jml_uang, no_rek, an_rek, tgl_masuk, respon) VALUES('$kd_pendaftaran', '$jns_pakai','$jml_uang','$no_rek','$an_rek','$tgl_masuk','perpanjang')") or die (mysql_error());


if ($query_simpan) {
	
	/*echo "
    <div class='alert alert-success alert-dismissable text-center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                             Kirim data transfer sukses, silahkan tunggu untuk diaktifkan</div>
    ";*/
	
   echo"<script>alert('Kirim data transfer sukses, silahkan tunggu untuk diktifkan')</script>";
	echo"<meta http-equiv='refresh' content='0;url=index.php'>";
	}
	else 
	{
		/*echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                              Kirim data transfer gagal </div> ";*/
		echo"<script>alert('Kirim data transfer gagal')</script>";
	echo"<meta http-equiv='refresh' content='0;url=index.php'>";
		}
	
}

?>