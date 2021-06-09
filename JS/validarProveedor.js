function validacionProveedor() {
  //campos Proveedor
  nombreProveedor=document.getElementById('nombreProveedor').value;
  telefono=document.getElementById('telefono').value;
  direccion=document.getElementById('direccion').value;
  correo=document.getElementById('correo').value;
  empresa=document.getElementById('empresa').value;

  //Proveedor
  if( nombreProveedor == null || nombreProveedor.length == 0 || /^\s+$/.test(nombreProveedor) ) {
    alert('El campo Nombre Proveedor se encuentra vacio');
  return false;
  }
  else if( telefono == null || telefono.length == 0 || /^\s+$/.test(telefono) ) {
    alert('El campo Telefono se encuentra vacio');
  return false;
  }
  else if( !(/^\d{10}$/.test(telefono)) ) {
    alert('El campo Telefono es incorrecto');
  return false;
  }
  else if( direccion == null || direccion.length == 0 || /^\s+$/.test(direccion) ) {
    alert('El campo Dirección se encuentra vacio');
  return false;
  }
  else if( correo == null || correo.length == 0 || /^\s+$/.test(correo) ) {
    alert('El campo Correo se encuentra vacio');
  return false;
  }
  else if(empresa == null || empresa.length == 0 || /^\s+$/.test(empresa)){
    alert('El campo Empresa se encuentra vacio');
  return false;
  }
}
