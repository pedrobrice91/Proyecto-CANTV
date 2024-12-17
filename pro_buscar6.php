<?php
include('conexion.php');
switch($_GET["buscar"]){
case "1":
	$departamento2 = $_GET["departamento"];
	$insertSQL = "SELECT * FROM BaseInventario WHERE departamento = '$departamento2'";
	
	break;
case "2":
	$cod_Inventario2 = $_GET["cod_Inventario"];
	$insertSQL = "SELECT * FROM BaseInventario WHERE cod_Inventario = $cod_Inventario2";
	break;
case "3":
	$fechas2 = $_GET["fechas"];
	$insertSQL = "SELECT * FROM BaseInventario WHERE fechas = '$fechas2'";
	break;
}
$resultado = mysql_query($insertSQL, $strConexion);
//echo "valor = $departamento2"; 
?>
<html>
<head>
<title>Resultados de la busqueda</title>
</head>
<body>
<img src="catv.jpg" align="left" height="160" width="175">
<br  />
<h1 align="center"><font color="#2763A5"><u>REPORTES DE MOVIMIENTOS</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  />
<?php if($registro = mysql_fetch_assoc($resultado)){ ?>
<table border="1" width="90%" bgcolor="#6DA6E2">
<tr>
<th>Codigo de Inventario</th>
<th>Serial</th>
<th>Modelo</th>
<th>Marca</th>
<th>Departamento</th>
<th>Fecha de Salida</th>
</tr>
<?php do { ?>
<tr>
<td><?php echo $registro['cod_Inventario']; ?></td>
<td><?php echo $registro['serial']; ?></td>
<td><?php echo $registro['modelo']; ?></td>
<td><?php echo $registro['marca']; ?></td>
<td><?php echo $registro['departamento']; ?></td>
<td><?php echo $registro['fechas']; ?></td>
<?php  } while($registro = mysql_fetch_assoc($resultado)) ?>
</table>

<?php } else { ?>
<h2>No se ha encontrado linea que correspondiente</h2>
<?php }  ?>

<br />
<br /><input type="button" name="imprimir" value="Imprimir" onclick="window.print();">

<a href="pro_buscar5.php">Buscar otro</a>
</body>
</html>
