<?php

switch ($_GET['page']) 
{
case '' :
	if(!file_exists ("adminCloud/pendaftaran/pendaftaran.php"))
		die ("File tidak ada");
		include "adminCloud/pendaftaran/pendaftaran.php";
break;



case 'pendaftaran':
	if(!file_exists("adminCloud/pendaftaran/pendaftaran.php"))
		die ("File tidak ada");
	include "adminCloud/pendaftaran/pendaftaran.php";
	break;		
	
case 'logoutAdministrator':
	if(!file_exists("logoutAdministrator.php"))
		die ("File tidak ada");
	include "logoutAdministrator.php";
	break;		
	

	
}


?>