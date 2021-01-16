<?php
session_start();
unset($_SESSION['SES_USER']);
unset($_SESSION['SES_LEVEL']);


include "koneksi.php";

	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = mysql_query("SELECT * FROM tb_user WHERE username ='$username' AND password='$password'") or die (mysql_error());
		$cek=mysql_num_rows($sql);
		$data=mysql_fetch_array($sql);
		
if ($cek>=1) {
	
	session_start();
	$SES_USER =$data['username'];
	$SES_LEVEL =$data['level'];
	
	$_SESSION["SES_USER"]=$SES_USER;
	$_SESSION["SES_LEVEL"]=$SES_LEVEL;
	
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	

	} else {
		echo " <div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                             username dan password tidak valid !
                            </div>";
		}


?>