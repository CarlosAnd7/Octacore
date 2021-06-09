function validacionProducto() {
  //campos Proveedor
  proveedorID=document.getElementById('proveedorID').selectedIndex;
  nombrePieza=document.getElementById('nombrePieza').value;
  numeroPieza=document.getElementById('numeroPieza').value;
  descripcion=document.getElementById('descripcion').value;
  precio=document.getElementById('precio').value;

  //Proveedor
  if( proveedorID == null || proveedorID == 0 ) {
    alert('Seleccione un Proveedor de la lista');
  return false;
  }
  else if( nombrePieza == null || nombrePieza.length == 0 || /^\s+$/.test(nombrePieza) ) {
    alert('El campo Nombre de Pieza se encuentra vacio');
  return false;
  }
  else if( numeroPieza == null || numeroPieza.length == 0 || /^\s+$/.test(numeroPieza) ) {
    alert('El campo Numero de Pieza se encuentra vacio');
  return false;
  }
  else if( descripcion == null || descripcion.length == 0 || /^\s+$/.test(descripcion) ) {
    alert('El campo Descripcion se encuentra vacio');
  return false;
  }
  else if( precio == null || precio.length == 0 || /^\s+$/.test(precio) ) {
    alert('El campo Precio se encuentra vacio');
  return false;
  }
}
