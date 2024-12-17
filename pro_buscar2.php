<?php
include('conexion.php');
switch($_GET["buscar"]){
case "1":
	$insertSQL = "SELECT * FROM BaseInventario";
	break;
case "2":
	$cod_Inventario2 = $_GET["cod_Inventario"];
	$insertSQL = "SELECT * FROM BaseInventario WHERE cod_Inventario = $cod_Inventario2";
	break;
}
$resultado = mysql_query($insertSQL, $strConexion);
?>
<html>
<head>
<title>Resultados de la busqueda</title>
</head>
<body>
<img src="catv.jpg" align="left" height="160" width="175">
<br  />
<h1 align="center"><font color="#2763A5"><u> Inventario Cantv</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  />
<?php if($registro = mysql_fetch_assoc($resultado)){ ?>
<table border="1" width="90%" bgcolor="#6DA6E2">
<tr>
<th>Codigo de Inventario</th>
<th>Serial</th>
<th>Tipo</th>
<th>Modelo</th>
<th>Marca</th>
<th>Departamento</th>
<?php do { ?>
<tr>
<td><?php echo $registro['cod_Inventario']; ?></td>
<td><?php echo $registro['serial']; ?></td>
<td><?php echo $registro['tipo']; ?></td>
<td><?php echo $registro['modelo']; ?></td>

<td><?php echo $registro['marca']; ?></td>
<td><?php echo $registro['departamento']; ?></td>
<?php  } while($registro = mysql_fetch_assoc($resultado)) ?>
</table>
<?php } else { ?>
<h2>No se ha encontrado linea que correspondiente</h2>
<?php }  ?>
<br />
<a href="pro_buscar.php">Buscar otro</a>
</body>
</html>
