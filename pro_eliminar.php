<?php
include('conexion.php');
$insertSQL = "SELECT * FROM BaseInventario ";
$resultado = mysql_query($insertSQL, $strConexion);
?>
<html>
<head>
<title>Resultados de la busqueda</title>
</head>
<body>
<img src="imagenes/catv.jpg" align="left" height="160" width="175">
<br  />
<h1 align="center"><font color="#2763A5"><u>ELIMINAR PRODUCTOS</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  />
<?php if($registro = mysql_fetch_assoc($resultado)){ ?>
<table border="1" width="100%" bgcolor="#6DA6E2">
<tr>
<th>serial</th>
<th>cod_Inventario</th>
<th>marca</th>
<th>modelo</th>

</tr>
<?php do { ?>
<tr>
<td><?php echo $registro['serial']; ?></td>
<td><?php echo $registro['cod_Inventario']; ?></td>
<td><?php echo $registro['marca']; ?></td>
<td><?php echo $registro['modelo']; ?></td>
<td title="Eliminar" id="Eliminar" name="Eliminar"><a href="pro_eliminar1.php?id=<?php echo $registro['indicador']; ?>"><center><img src="imagenes/16(Delete).ico"></center></a></td>
</tr>
<?php  } while($registro = mysql_fetch_assoc($resultado)) ?>
</table>
<?php } else { ?>
<h2>No se ha encontrado productos con esas caracteristicas</h2>
<?php }  ?>
<br />
<a href="home.php">Pagina Proncipal</a>

</body>
</html>
