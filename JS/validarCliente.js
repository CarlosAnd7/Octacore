function validacionCliente() {
  //campos cliente
  nombreCompleto=document.getElementById('nombreCompleto').value;
  telefono=document.getElementById('telefono').value;
  direccion=document.getElementById('direccion').value;
  correo=document.getElementById('correo').value;

  //cliente
  if( nombreCompleto == null || nombreCompleto.length == 0 || /^\s+$/.test(nombreCompleto) ) {
    alert('El campo Nombre Completo se encuentra vacio');
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
}
