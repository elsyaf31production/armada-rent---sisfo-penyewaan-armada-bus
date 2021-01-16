<?php

session_start();
unset($_SESSION['NAMA_DB']);
unset($_SESSION['KD_PENDAFTARAN']);

unset($_SESSION['SES_USER']);
unset($_SESSION['SES_LEVEL']);
session_destroy();
echo "<meta http-equiv='refresh' content='0;url=index.php'>";

?>