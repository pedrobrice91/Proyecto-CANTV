<?php
include('conexion.php');
$strConexion = mysql_pconnect($hostname, $username, $password);
mysql_select_db($database, $strConexion);
$id = $_GET["id"];
$SQL = "DELETE FROM BaseInventario WHERE indicador=$id";
mysql_query($SQL, $strConexion) or die(mysql_error());
?>
<html>
<head><title>Eliminar Producto</title></head>
<body>
<!Imagen del encabezado>
<img src="catv.jpg" align="left" height="160" width="175">
<br  />
<h1 align="center"><font color="#2763A5"><u>Eliminar Producto</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  /><br  />
<center>
<h2>Se ha eliminado el Almacen</h2>
<br />
<a href="pro_modificar.php">Eliminar Otro Producto</a>
<br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  />
<!Pie de pagina>
<br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  />
<img src="imagenes/barra1.jpg" align="center" width="1000">
</center>
</body>
</html>
