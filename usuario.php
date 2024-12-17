<?php
session_start();

if(!isset($_SESSION))
{
	header("location:../index.php");
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
<title>Documento sin título</title>
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
    <td height="413" colspan="5" align="center"><form id="entrar" name="registro" method="post" action="control.php">
      OPERADOR
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
