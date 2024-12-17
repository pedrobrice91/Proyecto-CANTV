<?php
	include("conexion.php");
	$sql="SELECT * FROM usuarios"; 
	$resultado=mysql_query($sql);
?>
  <title>Agregar Productos</title>


<link rel="stylesheet" type="text/css" href="css/vanadium.css" />
 <!-- Fin de Validaciones del sistema-->
  <link href="css/estilo.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<div id="contenedor">


<div id="areatexto">

<!Imagen del encabezado>
<img src="catv.jpg" align="left" height="160" width="175">
<br  />
<h1 align="center"><font color="#2763A5"><u>AGREGAR USUARIO</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  /><br  /><br  /><br  />
<center>
<form id="fvalida" name="fvalida" method="post" action="" onsubmit="return valida_envia();">
    
   
      <td width="231">Nombre Completo</td>
      <td width="231"><input name="NombreCompleto" type="text" id="NombreCompleto" size="30" /></td><br  /><br  />
      <td width="231">Cargo</td>
      <td width="231"><input name="Cargo" type="text" id="Cargo" size="40" /></td><br  /><br  />
      <td width="231">Usuario</td>
      <td width="231"><input name="usuario" type="text" id="usuario" size="30" /></td><br  /><br  />
      <td width="231">PasswordX</td>
      <td width="231"><input name="PasswordX" type="text" id="PasswordX" size="30" /></td><br  /><br  />
     
    

    <tr align="left">

<td colspan="6" align="center" valign="bottom" bordercolor="#CCCCCC" bgcolor="#99CCFF"><input name="Agregar" type="submit" id="Agregar" value="" class="btn_devolver" title="Agregar Producto"/>

        &nbsp;&nbsp;
        &nbsp;&nbsp;
        <input name="limpiar" type="reset" id="limpiar" value="" class="btn_limpiar" title="Limpiar campos" /></td>
      </tr>
 
</form>
<br />
<br />
<a href="home.php">Ir a la pagina principal</a>
<br /><br /><br />

</div>

<?php
//BOTON DE AGREGAR PRODUCTOS
if (isset($_POST['Agregar'])) {
$NombreCompleto= $_POST['NombreCompleto'];
$Cargo= $_POST['Cargo'];
$usuario= $_POST['usuario'];
$PasswordX= $_POST['PasswordX'];
	
	mysql_query("insert into usuarios (NombreCompleto, Cargo, usuario, PasswordX,) VALUES ('$NombreCompleto', '$Cargo', '$usuario','$PasswordX')");

	$mensaje= "Se agrego correctamente";
	}


//ACCION PARA ENVIAR MENSAJES
if (isset($mensaje))
  echo "<script> alert('$mensaje') </script>";

?>
</body>
</html>
