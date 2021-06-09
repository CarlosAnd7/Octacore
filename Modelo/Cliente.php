<?php
class Cliente{
	protected $sNombreCompleto="";
	protected $sTelefono="";
	protected $sDireccion="";
	protected $sCorreo="";
  protected $bBL="";

    function setNombreCompleto($psNombreCompleto){
       $this->sNombreCompleto = $psNombreCompleto;
    }
    function getNombreCompleto(){
       return $this->sNombreCompleto;
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

    function setPerteneceBL($pbBL){
       $this->bBL= $pbBL;
    }
    function getPerteneceBL(){
       return $this->bBL;
    }
}
?>
