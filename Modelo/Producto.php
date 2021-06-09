<?php
class Producto{
  protected $sProductoID="";
  protected $sProveedorID="";
	protected $sNumeroPieza="";
	protected $sNombrePieza="";
	protected $sDescripcion="";
	protected $sPrecio="";


    function setProveedorID($psProveedorID){
      $this->sProveedorID = $psProveedorID;
    }
    function getProveedorID(){
      return $this->sProveedorID;
    }
    function setNumeroPieza($psNumeroPieza){
       $this->sNumeroPieza = $psNumeroPieza;
    }
    function getNumeroPieza(){
       return $this->sNumeroPieza;
    }

    function setNombrePieza($psNombrePieza){
       $this->sNombrePieza = $psNombrePieza;
    }
    function getNombrePieza(){
       return $this->sNombrePieza;
    }

    function setDescripcion($psDescripcion){
       $this->sDescripcion = $psDescripcion;
    }
    function getDescripcion(){
       return $this->sDescripcion;
    }

    function setPrecio($psPrecio){
       $this->sPrecio= $psPrecio;
    }
    function getPrecio(){
       return $this->sPrecio;
    }
}
?>
