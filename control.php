<?php
session_start();

$login_name      = htmlspecialchars(trim($_POST['login']));
$login_password = htmlspecialchars(trim($_POST['pass']));
include_once("./clases/ModeloAcceso.php");	
$u = new usuario();
$u->setLogin($login_name);
$u->setClave($login_password);
if ($registro = $u->buscaAcceso())
			{
	$NTuplas = $u->getNTupla($registro);
	$Arreglo  = $u->getTupla($registro);
	$_SESSION['Valores']= $datos;
	if ($NTuplas==1)
	{
		
		$_SESSION["login"]=$Arreglo['login_name'];
		$_SESSION["Permitido"]="Si";

		//echo "--------+".$Arreglo['tipo']."+---------";
		if ($Arreglo['tipo']=='1')
			header("Location:Administra.php");
		else
			header("Location:Usuario.php");
	}
	else
	{
		header("Location:../entra.php");
	}
}
else
{
	header("Location:../entra.php");
}
?>
