<?php
include('conexion.php');
$insertSQL = "SELECT * FROM BaseInventario";
$resultado = mysql_query($insertSQL, $strConexion);
?>
<html>
<head><title>Consulta de Productos</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<img src="catv.jpg" align="left" height="160" width="175">
<br  />
<h1 align="center"><font color="#2763A5"><u>CONSULTAR PRODUCTOS</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  />
<center>
<form action="pro_buscar6.php" method="get">
<br /><br />
<input type="radio" name="buscar" id="buscar" value="1" /> Por Departamento: <input type="text" name="departamento"  /><br /><br />
<input type="radio" name="buscar" id="buscar" value="2" /> Por Codigo: <input type="text" name="cod_Inventario"  /><br /><br />
<input type="radio" name="buscar" id="buscar" value="3" /> por Fecha: <input type="text" name="fechas"  /><br /><br />

</select> <br /><br /><br />
<input name="consultar" type="submit" id="consultar" value="" class="btn_consultar" title="consultar" />

</form>
<br /><a href="home.php">Pagina Principal</a>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</center>
</body>
</html>
