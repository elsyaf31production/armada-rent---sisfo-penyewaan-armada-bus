<?php

session_start();

unset($_SESSION['ADMINISTRATOR_CLOUD']);
session_destroy();
echo "<meta http-equiv='refresh' content='0;url=index.php'>";

?>