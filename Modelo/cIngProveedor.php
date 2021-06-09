<?php
include_once("./conexion.php");
include_once("./Proveedor.php");
$conexion = new Conexion();
$pr = new Proveedor();

	//se conecta a la BD
	$conexion->conectar();
	//llena los datos de cliente (QUITAR??)
	$pr->setnombreProveedor($_POST["nombreProveedor"]);
	$pr->setTelefono($_POST["telefono"]);
	$pr->setDireccion($_POST["direccion"]);
	$pr->setCorreo($_POST["correo"]);
	$pr->setEmpresa($_POST["empresa"]);

    //el nuevo cliente se agrega a la BD
	if($conexion->insertar("INSERT INTO proveedor(telefono,nombreProveedor,direccion,correo,empresa) VALUES ("
	.$pr->getTelefono().", "
	."\"".$pr->getnombreProveedor()."\"".", "
	."\"".$pr->getDireccion()."\"".", "
	."\"".$pr->getCorreo()."\"".", "
	."\"".$pr->getEmpresa()."\"".");"))
	{
		echo '<script type="text/javascript">
		alert("Registro añadido correctamente");
		window.location.href="../Proveedores.php";
		</script>';
	}
	else{
		echo '<script type="text/javascript">
		alert("Error, no se puede agregar el registro");
		window.location.href="../IngProveedor.php";
		</script>';
	}
?>
