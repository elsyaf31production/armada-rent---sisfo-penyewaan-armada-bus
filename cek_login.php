<?php

include "koneksiCloud.php";

	
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = mysql_query("SELECT * FROM tb_pendaftaran WHERE email ='$email' AND password='$password'") or die (mysql_error());
		$cek=mysql_num_rows($sql);
		$data=mysql_fetch_array($sql);
		
if ($cek>=1) {
	
	session_start();
	$SES_NAMADB =$data['nama_db'];
	$kd_pendaftaran =$data['kd_pendaftaran'];
	$tgl_cek = $data['tgl_akhir'];
	if ($tgl_cek == '0000-00-00')
	{$status = "awal";} else {$status = "lanjut";}
	
	$today=date ("Y-m-d");
	$tgl_akhir = strtotime($data['tgl_akhir']);
	$tgl_sekarang = strtotime($today);
		
	
		if ($data['status'] == "aktif")	
		{
			if ($tgl_akhir >= $tgl_sekarang && $tgl_cek != "0000-00-00")
			{
			
			$_SESSION["NAMA_DB"]=$SES_NAMADB;
			$_SESSION["KD_PENDAFTARAN"]=$data['kd_pendaftaran'];
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
			}
			else 
			{	
		
		echo " <div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                             masa pakai habis, silahkan perpanjang ! 
							 <hr />
							 <a href='perpanjang.php?kd_pendaftaran=$kd_pendaftaran&status=$status' class='btn btn-primary btn-sm'>Perpanjang</a> 
                            </div>";
			}
		}
		else 
		{
			echo " <div class='alert alert-success alert-dismissable'>
                   <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    belum diaktifasi, silahkan tunggu !
                   </div>";
		}
	} 
else 
	{
	echo " <div class='alert alert-success alert-dismissable'>
		   <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		   email dan password tidak valid !
		   </div>";
	}


?>