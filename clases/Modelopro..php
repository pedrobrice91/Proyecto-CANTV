<?php
include_once("conecta_bd.php");
class usuario extends CModeloDatos{
     private $nombre;
	 private $login;
     private $pass;
	 private $tipo;

     public function usuario(){
       parent::CModeloDatos("localhost","sistema_tesis","root","");
       $this->nombre=" ";
	   $this->login=" ";
	   $this->pass=" ";
	   $this->tipo=" ";
     }
    
	 public function setNombre($Valor){
       $this->nombre= $Valor;
     }
	 public function setLogin($Valor){
       $this->login = $Valor;
     }
     public function setClave($Valor){
       $this->pass = $Valor;
     }
	  public function setTipo($Valor){
      $this->tipo = $Valor;
     }
 public function registrar(){
	
	$sql="insert into usuario (nombre,login_name,clave_usuario,tipo) values ('$this->nombre','$this->login','$this->pass','$this->tipo')";

	if ( parent::consulta($sql) ) 
		return true;
	else
	       return false;
     }
public function buscaAcceso(){
		$sql="select * from usuario where login_name = '$this->login' and clave_usuario = '$this->pass'";
	return ( parent::consulta($sql) );
     }
	   public function getTupla($resulta){
        return ( parent::getArreglo($resulta)  );
     }
     public function getNTupla($resultado){
        return ( parent::getNRegistro($resultado)  );
     }

}
?>
