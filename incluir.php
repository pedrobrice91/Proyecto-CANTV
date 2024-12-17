<?php
	include("conexion.php");
	$sql="SELECT * FROM BaseInventario "; 
	$resultado=mysql_query($sql);
?>
<head>
  <title>Agregar Productos</title>
 <!-- Validaciones del sistema-->
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/vanadium_es.js"></script>
<script type="text/javascript" src="js/jqueryForm.js"></script>
<script>

function valida_envia(){
	//valido el nombre del componente
	if (document.fvalida.Componente.value.length==0){
		alert("Tiene que escribir el nombre del componente")
		document.fvalida.Componente.focus()
		return false;
	}

 var caracteres = "abcdefghijklmnopqrstuvwxyzñ ABCDEFGHIJKLMNOPQRSTUVWXYZ" ;
  for (var i=0; i < document.getElementById('Componente').value.length; i++) {  
    caracter = document.getElementById('Componente').value.substring(i, i + 1)  
    if (caracteres.indexOf(caracter) == -1) {  
      alert("Hay caracteres no validos en el nombre del componente")  
      return false  
    }  
  }
//valido el tipo del componente
	if (document.fvalida.Tipo.value.length==0){
		alert("Tiene que escribir el tipo del componente")
		document.fvalida.Tipo.focus()
		return false;
	}
 var caracteres2 = "abcdefghijklmnopqrstuvwxyzñ ABCDEFGHIJKLMNOPQRSTUVWXYZ ()"  ;
  for (var i=0; i < document.getElementById('Tipo').value.length; i++) {  
    caracter2 = document.getElementById('Tipo').value.substring(i, i + 1)  
    if (caracteres2.indexOf(caracter2) == -1) {  
      alert("El tipo debe contener solo letras")  
      return false  
    }  
  }

//valido la descripcion del componente
	if (document.fvalida.Descripcion.value.length==0){
		alert("Tiene que escribir la descripcion del componente")
		document.fvalida.Descripcion.focus()
		return false;
	}

 var caracteres1 = "*1234567890 " ;
  for (var i=0; i < document.getElementById('Descripcion').value.length; i++) {  
    caracter1 = document.getElementById('Descripcion').value.substring(i, i + 1)  
    if (caracteres1.indexOf(caracter1) == -1) {  
      alert("Hay caracteres no validos en la descripcion del componente, debe ser numerico: ejemplo 12*5")  
      return false  
    }  
  }
	return true;
}
	
</script>

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
<h1 align="center"><font color="#2763A5"><u>AGREGAR al ALMACEN</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  /><br  /><br  /><br  />
<center>
<form id="fvalida" name="fvalida" method="post" action="" onsubmit="return valida_envia();">
    
   
      <td width="231">Serial</td>
      <td width="231"><input name="serial" type="text" id="serial" size="30" /></td><br  /><br  />
      <td width="231">Cod Inventario</td>
      <td width="231"><input name="cod_Inventario" type="text" id="cod_Inventario" size="30" /></td><br  /><br  />
      <td width="231">Tipo</td>
      <td width="231"><input name="tipo" type="text" id="tipo" size="30" /></td><br  /><br  />
      <td width="231">Marca</td>
      <td width="231"><input name="marca" type="text" id="marca" size="30" /></td><br  /><br  />
      <td width="231">Modelo</td>
      <td width="231"><input name="modelo" type="text" id="modelo" size="30" /></td><br  /><br  />
      <td width="231">Fecha Enrada</td>
      <td width="231"><input name="fechae" type="text" id="fechae" size="30" /></td><br  /><br  />
  <td width="231">departamento</td>
      <td width="231"><input name="departamento" type="text" id="serial" size="30" /></td><br  /><br  />
     

    <tr align="left">
<br  /><br  /><br  /><br  /><br  />
<td colspan="6" align="center" valign="bottom" bordercolor="#CCCCCC" bgcolor="#99CCFF"><input name="Agregar" type="submit" id="Agregar" value="" class="btn_devolver" title="Agregar Producto"/>

        &nbsp;&nbsp;
        &nbsp;&nbsp;
        <input name="limpiar" type="reset" id="limpiar" value="" class="btn_limpiar" title="Limpiar campos" /></td>
      </tr>
 
</form>
<br />
<br />
<a href="home.php">Ir a la pagina principal</a>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<?php
//BOTON DE AGREGAR PRODUCTOS
if (isset($_POST['Agregar'])) {
$serial= $_POST['serial'];
$cod_Inventario= $_POST['cod_Inventario'];
$tipo= $_POST['tipo'];
$marca= $_POST['marca'];
$modelo= $_POST['modelo'];
$fechae= $_POST['fechae'];
$departamento= $_POST['departamento'];
		if ($serial !="") {
	$resultado = mysql_query("select * from BaseInventario where BaseInventario='$BaseInventario'");
	$registro=mysql_fetch_array($resultado);
	
	}
	if($registro = mysql_fetch_assoc($resultado)){
	$mensaje= "Linea ya existe";
	}
		
     {
	mysql_query("insert into BaseInventario (serial, cod_Inventario,tipo, marca, modelo, fechae, departamento) VALUES ('$serial', '$cod_Inventario' ,'$tipo', '$marca', '$modelo', '$fechae', '$departamento' )");

	$mensaje= "Se agrego correctamente";
	}
}

//ACCION PARA ENVIAR MENSAJES
if (isset($mensaje))
  echo "<script> alert('$mensaje') </script>";

?>
</body>
</html>



