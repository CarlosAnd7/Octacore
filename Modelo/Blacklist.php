<?php
/*
Archivo:  Blacklist.php
Objetivo: clase que encapsula la información de la blacklist
Autor:    
*/
class Blacklist{
	protected $clienteID=0;
	protected $perteneceCliente=0;
    
    function setClienteID($pclienteID){
       $this->clienteID = $pclienteID;
    }
    function getClienteID(){
       return $this->clienteID;
    }
   
    function setPerteneceCliente($pperteneceCliente){
       $this->perteneceCliente = $pperteneceCliente;
    }   
    function getPerteneceCliente(){
       return $this->perteneceCliente;
    }
   
}
?>