<?php

include "koneksiCloud.php";

	
		$user_admin = $_POST['user_admin'];
		$password = $_POST['password'];
		
		$sql = mysql_query("SELECT * FROM tb_user WHERE user_admin = '$user_admin' AND password='$password'") or die (mysql_error());
		$cek=mysql_num_rows($sql);
		$data=mysql_fetch_array($sql);
		
if ($cek>=1) {
	
	session_start();
	
	$_SESSION["ADMINISTRATOR_CLOUD"]=$data['user_admin'];
	
	echo "<meta http-equiv='refresh' content='0;url=indexAdminCloud.php'>";
		
	
	} else {
		echo " <div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                             username dan password tidak valid !
                            </div>";
		}


?>