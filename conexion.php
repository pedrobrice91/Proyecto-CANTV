<?php
$hostname = "localhost";
$database = "Inventario";
$username = "root";
$password = "";
$strConexion = mysql_connect($hostname, $username, $password);
mysql_select_db($database, $strConexion);
?>
