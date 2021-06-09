<?php
/*
Archivo:  Dispositivo.php
Objetivo: clase que encapsula la información de unn dispositivo
Autor:    
*/
class Dispositivo{
	private $trabajoID=0;
	private $marca="";
	private $modelo="";
	private $descripcion="";
	private $trabajoRequerido="";
	private $contrasena="";
	private $fechaEntrega="";
	private $clienteID=0;

   function setTrabajoID($ptrabajoID){
       $this->trabajoID = $ptrabajoID;
    }
    function getTrabajoID(){
       return $this->trabajoID;
    }
   
    function setMarca($pmarca){
       $this->marca = $pmarca;
    }   
    function getMarca(){
       return $this->marca;
    }
   
    function setModelo($pmodelo){
       $this->modelo = $pmodelo;
    }
    function getModelo(){
       return $this->modelo;
    }
   
    function setDescripcion($pdescripcion){
       $this->descripcion = $pdescripcion;
    }
    function getDescripcion(){
       return $this->descripcion;
    }
   
    function setTrabajoRequerido($ptrabajoRequerido){
       $this->trabajoRequerido = $ptrabajoRequerido;
    }
    function getTrabajoRequerido(){
       return $this->trabajoRequerido;
    }
	
    function setContrasena($pcontrasena){
       $this->contrasena = $pcontrasena;
    }
    function getContrasena(){
       return $this->contrasena;
    }
	
    function setFechaEntrega($pfechaEntrega){
       $this->fechaEntrega= $pfechaEntrega;
    }
    function getFechaEntrega(){
       return $this->fechaEntrega;
    }

    function setClienteID($pclienteID){
       $this->clienteID= $pclienteID;
    }
    function getClienteID(){
       return $this->clienteID;
    }

}
?>