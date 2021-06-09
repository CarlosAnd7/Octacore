<?php
include_once("conexion.php");
include_once("Cliente.php");
$conexion=new Conexion();
$c=new Cliente();

	//se conecta a la BD
	$conexion->conectar();
	//llena los datos de cliente (QUITAR??)
	$c->setNombreCompleto($_POST["nombreCompleto"]);
	$c->setTelefono($_POST["telefono"]);
	$c->setDireccion($_POST["direccion"]);
	$c->setCorreo($_POST["correo"]);
	$c->setPerteneceBL(0);

    //el nuevo cliente se agrega a la BD
	if($conexion->insertar("INSERT INTO cliente (telefono,nombreCompleto,direccion,correo,perteneceBL) VALUES ("
		.$c->getTelefono().", "
		."\"".$c->getNombreCompleto()."\"".", "
		."\"".$c->getDireccion()."\"".", "
		."\"".$c->getCorreo()."\"".", "
		."\"".$c->getPerteneceBL()."\"".");"))
	{
		echo '<script type="text/javascript">
		alert("Registro agregado correctamente");
		window.location.href="../Cliente.php";
		</script>';
	}
	else{
		echo '<script type="text/javascript">
		alert("Error, no se puede agregar el registro");
		window.location.href="../ingCliente.php";
		</script>';
	}
?>
