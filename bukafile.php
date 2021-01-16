<?php

switch ($_GET['page']) 
{
case '' :
	if(!file_exists ("pages/dashboard.php"))
		die ("File tidak ada");
		include "pages/dashboard.php";
break;

case 'kelola_armada':
	if(!file_exists("pages/kelola_armada/index.php"))
		die ("File tidak ada");
	include "pages/kelola_armada/index.php";
	break;

case 'kelola_driver':
	if(!file_exists("pages/kelola_driver/index.php"))
		die ("File tidak ada");
	include "pages/kelola_driver/index.php";
	break;

case 'kelola_codriver':
	if(!file_exists("pages/kelola_codriver/index.php"))
		die ("File tidak ada");
	include "pages/kelola_codriver/index.php";
	break;

case 'pemesanan':
	if(!file_exists("pages/pemesanan/pemesanan.php"))
		die ("File tidak ada");
	include "pages/pemesanan/pemesanan.php";
	break;

case 'data_pemesanan':
	if(!file_exists("pages/data_pemesanan/data_pemesanan.php"))
		die ("File tidak ada");
	include "pages/data_pemesanan/data_pemesanan.php";
	break;		


case 'pendaftaran':
	if(!file_exists("pages/pendaftaran/pendaftaran.php"))
		die ("File tidak ada");
	include "pages/pendaftaran/pendaftaran.php";
	break;		
	
case 'pemberangkatan':
	if(!file_exists("pages/pemberangkatan/data_pemberangkatan.php"))
		die ("File tidak ada");
	include "pages/pemberangkatan/data_pemberangkatan.php";
	break;		

	
case 'penggajian':
	if(!file_exists("pages/penggajian/data_penggajian.php"))
		die ("File tidak ada");
	include "pages/penggajian/data_penggajian.php";
	break;		
	
case 'keuangan_umum':
	if(!file_exists("pages/keuangan_umum/data_keuanganUmum.php"))
		die ("File tidak ada");
	include "pages/keuangan_umum/data_keuanganUmum.php";
	break;		
		
case 'keuangan_armada':
	if(!file_exists("pages/keuangan_armada/data_keuanganArmada.php"))
		die ("File tidak ada");
	include "pages/keuangan_armada/data_keuanganArmada.php";
	break;		

case 'user':
	if(!file_exists("pages/user/data_user.php"))
		die ("File tidak ada");
	include "pages/user/data_user.php";
	break;		

case 'perpanjangan':
	if(!file_exists("pages/perpanjangan/perpanjang.php"))
		die ("File tidak ada");
	include "pages/perpanjangan/perpanjang.php";
	break;		

	
}


?>