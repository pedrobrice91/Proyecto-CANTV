
<?php
include_once("./clases/ModeloAcceso.php");

$u = new usuario();
$u->setNombre($_POST["nombre"]);
$u->setLogin($_POST["login"]);
$u->setClave($_POST["pass"]);
$u->setTipo($_POST["tipo"]);
if ($u->registrar()){
header("Location:../sistematesis/index.php");
}else{
header("Location:../sistematesis/index.php?error=No registro!");
}
?>