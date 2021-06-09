<?php
class Proveedor{
	protected $snombreProveedor="";
	protected $sTelefono="";
	protected $sDireccion="";
  protected $sEmpresa="";
	protected $sCorreo="";


    function setnombreProveedor($psnombreProveedor){
       $this->snombreProveedor = $psnombreProveedor;
    }
    function getnombreProveedor(){
       return $this->snombreProveedor;
    }

    function setTelefono($psTelefono){
       $this->sTelefono = $psTelefono;
    }
    function getTelefono(){
       return $this->sTelefono;
    }

    function setDireccion($psDireccion){
       $this->sDireccion = $psDireccion;
    }
    function getDireccion(){
       return $this->sDireccion;
    }

    function setCorreo($psCorreo){
       $this->sCorreo= $psCorreo;
    }
    function getCorreo(){
       return $this->sCorreo;
    }

    function setEmpresa($psEmpresa){
       $this->sEmpresa= $psEmpresa;
    }
    function getEmpresa(){
       return $this->sEmpresa;
    }
}
?>
