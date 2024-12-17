<?php
session_start();

if(!isset($_SESSION))
{
	header("location:../home.php");
} 
else 
{
	if ($_SESSION["Permitido"]=="Si")
	{
		$login = $_SESSION["login"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin ttulo</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style></head>

<body>
<table width="790" height="550" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100" colspan="5"><img src="imagenes/Banner.jpg" width="900" height="100" alt="" /></td>
  </tr>
  <tr>
    <td width="152" height="18" bgcolor="#0296BC">&nbsp;</td>
    <td width="243" bgcolor="#0296BC">&nbsp;</td>
    <td width="177" bgcolor="#0296BC"><?php echo $login;?></td>
    <td width="180" height="18" bgcolor="#0296BC">&nbsp;</td>
    <td width="148" height="18" bgcolor="#0296BC"><a href="salir.php">Salir</a></td>
  </tr>
  <tr>
    <td height="413" colspan="5" align="center"><form id="entrar" name="registro" method="post" action="NegocioAcceso.php">
      <table width="200" border="1">
        <tr>
          <td colspan="2" align="center" bgcolor="#0296BC">Registro Usuario</td>
          </tr>
        <tr>
          <td width="71" align="right">Nombre:</td>
          <td width="113"><input type="text" name="nombre" id="nombre" /></td>
        </tr>
        <tr>
          <td align="right">Usuario:</td>
          <td><input type="text" name="login" id="login" /></td>
        </tr>
        <tr>
          <td align="right">Clave:</td>
          <td><input type="text" name="pass" id="pass" /></td>
        </tr>
        <tr>
          <td align="right">Tipo:</td>
          <td><select name="tipo" id="tipo">
            <option value="1">Administrador</option>
            <option value="2" selected="selected">Operador</option>
            <option value="3">Usuario</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Registrar" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td height="18" colspan="5" align="center" bgcolor="#0296BC">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
		}
	}
?>