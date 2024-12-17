<?php
include('conexion.php');
$id = $_GET["id"];
$sql = "SELECT * FROM BaseInventario WHERE indicador='$id'";
$resultado=mysql_query($sql, $strConexion);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es"><head>
  <title>Modificar Datos de Producto</title>
 <!-- Validaciones del sistema-->
 <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/vanadium_es.js"></script>
<script type="text/javascript" src="js/jqueryForm.js"></script>

<script>

function valida_envia(){
	//valido la linea
	if (document.fvalida.Linea.value.length==0){
		alert("Tiene que escribir la LINEA")
		document.fvalida.Linea.focus()
		return false;
	}

 var caracteres = "1234567890" ;
  for (var i=0; i < document.getElementById('Linea').value.length; i++) {  
    caracter = document.getElementById('Linea').value.substring(i, i + 1)  
    if (caracteres.indexOf(caracter) == -1) {  
      alert("Hay caracteres no validos en la casilla LINEA, solo puede contener numeros")  
      return false  
    }  
  }
//valido el vertical
	if (document.fvalida.verticalo.value.length==0){
		alert("Tiene que escribir la ubicacion VERTICAL ORIGEN de la linea")
		document.fvalida.verticalo.focus()
		return false;
	}
 var caracteres2 = "1234567890"  ;
  for (var i=0; i < document.getElementById('verticalo').value.length; i++) {  
    caracter2 = document.getElementById('verticalo').value.substring(i, i + 1)  
    if (caracteres2.indexOf(caracter2) == -1) {  
      alert("la ubicacion VERTICAL ORIGEN debe contener solo numeros")  
      return false  
    }  
  }
//valido el vertical
	if (document.fvalida.horizontalo.value.length==0){
		alert("Tiene que escribir la ubicacion VERTICAL ORIGEN de la linea")
		document.fvalida.horizontalo.focus()
		return false;
	}
 var caracteres2 = "1234567890"  ;
  for (var i=0; i < document.getElementById('horizontalo').value.length; i++) {  
    caracter2 = document.getElementById('horizontalo').value.substring(i, i + 1)  
    if (caracteres2.indexOf(caracter2) == -1) {  
      alert("la ubicacion HORIZONTALO ORIGEN debe contener solo numeros")  
      return false  
    }  
  }
//valido paro
	if (document.fvalida.paro.value.length==0){
		alert("Tiene que escribir el PAR ORIGEN al cual pertenece la linea")
		document.fvalida.paro.focus()
		return false;
	}

 var caracteres1 = "*1234567890 " ;
  for (var i=0; i < document.getElementById('paro').value.length; i++) {  
    caracter1 = document.getElementById('paro').value.substring(i, i + 1)  
    if (caracteres1.indexOf(caracter1) == -1) {  
      alert("los caracteres de la casilla PAR ORIGEN, deben ser numericos")  
      return false  
    }  
  }
//valido el verticald
	if (document.fvalida.verticald.value.length==0){
		alert("Tiene que escribir la ubicacion VERTICAL DESTINO de la Linea")
		document.fvalida.verticald.focus()
		return false;
	}
 var caracteres4 = "1234567890"  ;
  for (var i=0; i < document.getElementById('verticald').value.length; i++) {  
    caracter4 = document.getElementById('verticald').value.substring(i, i + 1)  
    if (caracteres4.indexOf(caracter4) == -1) {  
      alert("la ubicacion VERTICAL DESTINO debe contener solo numeros")  
      return false  
    }  
  }
//valido el horizontald
	if (document.fvalida.horizontald.value.length==0){
		alert("Tiene que escribir la ubicacion HORIZONTAL DESTINO destino de la Linea")
		document.fvalida.horizontald.focus()
		return false;
	}
 var caracteres5 = "1234567890"  ;
  for (var i=0; i < document.getElementById('horizontald').value.length; i++) {  
    caracter5 = document.getElementById('horizontald').value.substring(i, i + 1)  
    if (caracteres5.indexOf(caracter5) == -1) {  
      alert("la ubicacion HORIZONTAL DESTINO destino debe contener solo numeros")  
      return false  
    }  
  }
//valido el pard
	if (document.fvalida.pard.value.length==0){
		alert("Tiene que escribir la ubicacion PAR DESTINO de la Linea")
		document.fvalida.pard.focus()
		return false;
	}
 var caracteres6 = "1234567890"  ;
  for (var i=0; i < document.getElementById('pard').value.length; i++) {  
    caracter6 = document.getElementById('pard').value.substring(i, i + 1)  
    if (caracteres6.indexOf(caracter6) == -1) {  
      alert("El PAR DESTINO debe contener solo numeros")  
      return false  
    }  
  }
//valido el piso
	if (document.fvalida.piso.value.length==0){
		alert("Tiene que escribir la ubicacion PISO DESTINO de la Linea")
		document.fvalida.piso.focus()
		return false;
	}
 var caracteres7 = "1234567890 asdfghjklñqwertyuiopzxcvbnm"  ;
  for (var i=0; i < document.getElementById('piso').value.length; i++) {  
    caracter3 = document.getElementById('piso').value.substring(i, i + 1)  
    if (caracteres7.indexOf(caracter7) == -1) {  
      alert("el PISO puede tener texto y numeros sin caracteres especiales")  
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
<h1 align="center"><font color="#2763A5"><u>MODIFICAR DATOS</u></h1>
<font color="#2763A5"><hr width="80%" size="8" noshade></font>
<br  /><br  />
<?php if($registro = mysql_fetch_assoc($resultado)){ ?>
<center>
<form method="post" id="fvalida" name="fvalida" onsubmit="return valida_envia();">
<h2>Datos del Activo</h2>
<td width="231">Serial:</td>
<input id="serial" type="text" name="serial" value="<?php echo $registro["serial"]; ?>" /><br /><br />
<td width="231">Codigo inventario: </td>
<input type="text" id="cod_Inventario" name="cod_Inventario" value="<?php echo $registro["cod_Inventario"]; ?>" /><br /><br />
<td width="231">Tipo: </td>
<input type="text" id="tipo" name="tipo" value="<?php echo $registro["tipo"]; ?>" /><br /><br />
<td width="231">Marca:</td>
<font size=4><input id="marca" type="text" name="marca" value="<?php echo $registro["marca"]; ?>" /><br /><br />
<td width="231">Modelo:</td>
 <input id="modelo" type="text" name="modelo" value="<?php echo $registro["modelo"]; ?>" /><br /><br />
<td width="231">Departamento:</td>
 <input id="departamento" type="text" name="departamento" value="<?php echo $registro["departamento"]; ?>" /><br /><br />
<input type="hidden" name="indicador" value="<?php echo $registro["indicador"]; ?>" />
<input name="Modificar" type="submit" id="Modificar" value=""  title="Modificar" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</tr>
</form>
<?php } else { ?>

<?php }  ?>
<br />
<center>
<a href="pro_modificar.php">Volver</a>
<!Pie de pagina>
<br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  /><br  />
<img src="imagenes/cantv.jpg" align="center" width="1000">
</center>
</div>

<?php
//BOTON DE Modificar PRODUCTOS
if (isset($_POST['Modificar'])) {
$serial= $_POST['serial'];
$cod_Inventario= $_POST['cod_Inventario'];
$tipo= $_POST['tipo'];
$marca= $_POST['marca'];
$modelo= $_POST['modelo'];
$departamento= $_POST['departamento'];
	if ($serial !='' and $cod_Inventario!=''and $tipo!='' and $marca!='' and $modelo !=''); 
{
		
		mysql_query("Update BaseInventario set serial = '$serial', cod_Inventario='$cod_Inventario',tipo='$tipo',marca='$marca', modelo='$modelo', departamento='$departamento' where indicador='$id' ");

		$mensaje= "Se han modificado correctamente los datos";
		
	}
	
	}
//ACCION PARA ENVIAR MENSAJES
if (isset($mensaje))
  echo "<script> alert('$mensaje') </script>";

?>

</body>
</html>
