<?php
/*
Archivo:  Capital.php
Objetivo: clase que encapsula la información de un capital
Autor:    
*/
class Capital{
	protected $trabajoID=0;
	protected $montoCobro=0;
	protected $tipoPago="";
	protected $clienteID="";
	protected $productoID=0;
	protected $proveedorID="";

    function setTrabajoID($ptrabajoID){
       $this->trabajoID = $ptrabajoID;
    }
    function getTrabajoID(){
       return $this->trabajoID;
    }
   
    function setMontoCobro($pmontoCobro){
       $this->montoCobro = $pmontoCobro;
    }   
    function getMontoCobro(){
       return $this->montoCobro;
    }
   
    function setTipoPago($ptipoPago){
       $this->tipoPago = $ptipoPago;
    }
    function getTipoPago(){
       return $this->tipoPago;
    }
   
    function setClienteID($pclienteID){
       $this->clienteID = $pclienteID;
    }
    function getClienteID(){
       return $this->clienteID;
    }
   
    function setProductoID($pproductoID){
       $this->productoID = $pproductoID;
    }
    function getProductoID(){
       return $this->productoID;
    }
	
}
?>