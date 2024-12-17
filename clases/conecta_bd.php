<?php
//--------------------------------------------------------------------
//       Clase CModeloDatos Capa Datos
//--------------------------------------------------------------------
  class CModeloDatos
  { 
	var $conexion;
	var $servidor;
	var $basedato;
	var $usuario;
	var $clave;
//--------------------------------------------------------------------
//       Constructor
//--------------------------------------------------------------------
  function CModeloDatos($servidor,$basedato,$usuario,$clave) 
  {
	$this->servidor   = $servidor;
	$this->basedato = $basedato;
	$this->usuario    = $usuario;
	$this->clave      = $clave;	
  }	
//--------------------------------------------------------------------
//       Abrir conexión o conectar
//--------------------------------------------------------------------
  function crearConexion() 
  {
	$this->conexion = mysql_connect($this->servidor,$this->usuario,$this->clave) or die('Could not connect to mysql server.' );		
	if ( $this->conexion && mysql_select_db($this->basedato, $this->conexion) ){
		return true;
	}
	else  
	{
		return false;
	}	
  }
//--------------------------------------------------------------------
//       Ejecutar una sentencia SQL 
//--------------------------------------------------------------------
  function consulta($query) 
  {
	if ( $this->crearConexion() )
	     return ( mysql_query($query,$this->conexion ) );
	else
	     return null;
  }
//--------------------------------------------------------------------
//       Proxima Tupla en Arreglo
//--------------------------------------------------------------------
  function getArreglo($resultado) 
  {
	return mysql_fetch_array($resultado);
  }
//--------------------------------------------------------------------
//       Proxima Tupla en Objeto
//--------------------------------------------------------------------
  function getObjeto($resulta) 
  {
	return  mysql_fetch_object($resulta);
  }
//--------------------------------------------------------------------
//       Cantidad de Tuplas 
//--------------------------------------------------------------------
  function getNRegistro($resulta) 
  {
	return mysql_num_rows($resulta);
  }
//--------------------------------------------------------------------
//       Cierra la conexión 
//--------------------------------------------------------------------

  function cerrar_bd() 
  {
	@mysql_close($this->conexion);
  } 
}
//  Fin de la clase