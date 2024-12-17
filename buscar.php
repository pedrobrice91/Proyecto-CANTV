<?php
include('conexion.php');
$insertSQL = "SELECT * FROM BaseInventario";
$resultado = mysql_query($insertSQL, $strConexion);
?>
<html>
<head><title>Consulta cod Inventario</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<img src="catv.jpg" align="left" height="160" width="175">
<br  />
<h1 align="center"><font color="#2763A5"><u>Salida del Inventario</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  />
<center>
<form action="pro_buscar2.php" method="get">
<br /><br />
<input type="radio" name="buscar" id="buscar" value="2" /> cod Inventario: <input type="text" name="cod_Inventario"  /><br /><br />

</select> <br /><br /><br />
<input name="consultar" type="submit" id="consultar" value="" class="btn_consultar" title="consultar" />

</form>
<br /><a href="home.php">Pagina Principal</a>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<img src="imagenes/catv.jpg" align="center" width="100">
</center>
</body>
</html>
