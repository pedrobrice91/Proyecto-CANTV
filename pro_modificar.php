<?php
include('conexion.php');
$insertSQL = "SELECT * FROM BaseInventario ";
$resultado = mysql_query($insertSQL, $strConexion);
?>
<html>
<head>
<title>Modificar Productos</title>
</head>
<body>
<img src="imagenes/catv.jpg" align="left" height="160" width="175">
<br  />
<h1 align="center"><font color="#2763A5"><u>MODIFICAR PRODUCTOS</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  />
<?php if($registro = mysql_fetch_assoc($resultado)){ ?>
<table border="1" width="100%" bgcolor="#6DA6E2">
<tr>
<th>Serial</th>
<th>Codigo de Inventario</th>
<th>Tipo</th>
<th>Marca</th>
<th>Modelo</th>
<th>Departamento</th>
<th>Modificar</th>
<th>Eliminar</th>
</tr>
<?php do { ?>
<tr>
<td><?php echo $registro['serial']; ?></td>
<td><?php echo $registro['cod_Inventario']; ?></td>
<td><?php echo $registro['tipo']; ?></td>
<td><?php echo $registro['marca']; ?></td>
<td><?php echo $registro['modelo']; ?></td>
<td><?php echo $registro['departamento']; ?></td>
<td title="Modificar"><a href="pro_modificar1.php?id=<?php echo $registro['indicador']; ?>"><img src="imagenes/16(User edit).ico"></a></td>
<td title="Eliminar"><a href="pro_eliminar1.php?id=<?php echo $registro['indicador']; ?>"><img src="imagenes/16(Delete).ico"></a></td>
</tr>
<?php  } while($registro = mysql_fetch_assoc($resultado)) ?>
</table>
<?php } else { ?>
<h2>No se ha encontrado productos con esas caracteristicas</h2>
<?php }  ?>
<br />
<a href="home.php">Pagina Principal</a>
</body>
</html>
