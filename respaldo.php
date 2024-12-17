<?php
include('conexion.php');
$insertSQL = "SELECT * FROM productos";
$resultado = mysql_query($insertSQL, $strConexion);
?>
<html>
<head><title>Mantenimiendo</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<img src="catv.jpg" align="left" height="160" width="175">
<br  />
<h1 align="center"><font color="#2763A5"><u>RESPALDAR DATOS</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  />
<center>
<form action="backup.php" method="get">
<br /><br />

<h2 alig="center">Pulse el boton para respaldar la base de datos</h2>

<input name="Respaldar" type="submit" id="respaldar" value="" class="btn_consultar" title="consultar" />

</form>
<br /><a href="home.php">Pagina Principal</a>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</center>
</body>
</html>