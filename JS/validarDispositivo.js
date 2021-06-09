function validacionDispositivo() {
  marca=document.getElementById('marca').value;
  modelo=document.getElementById('modelo').value;
  descripcion=document.getElementById('descripcion').value;
  trabajoRequerido=document.getElementById('trabajoRequerido').value;
  contrasena=document.getElementById('contrasena').value;
  fechaEntrega=document.getElementById('fechaEntrega').value;
  clienteID=document.getElementById('clienteID').selectedIndex;


  //Dispositivo
 if( marca == null || marca.length == 0 || /^\s+$/.test(marca) ) {
    alert('El campo Marca se encuentra vacio');
  return false;
  }
  else if( modelo == null || modelo.length == 0 || /^\s+$/.test(modelo) ) {
    alert('El campo Modelo se encuentra vacio');
  return false;
  }
  else if( descripcion == null || descripcion.length == 0 || /^\s+$/.test(descripcion) ) {
    alert('El campo Descripción se encuentra vacio');
  return false;
  }
  else if( trabajoRequerido == null || trabajoRequerido.length == 0 || /^\s+$/.test(trabajoRequerido) ) {
    alert('El campo Trabajo Requerido se encuentra vacio');
  return false;
  }
  else if( contrasena == null || contrasena.length == 0 || /^\s+$/.test(contrasena) ) {
    alert('El campo Contraseña se encuentra vacio');
  return false;
  }
  else if( fechaEntrega == null || fechaEntrega.length == 0 || /^\s+$/.test(fechaEntrega) ) {
    alert('El campo Fecha Entrega se encuentra vacio');
  return false;
  }
  else if( clienteID == null || clienteID == 0 ) {
    alert('Seleccione un cliente de la lista');
  return false;
  }
}
