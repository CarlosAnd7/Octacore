<?php
include_once("./conexion.php");
include_once("./Producto.php");
$conexion = new Conexion();
$pr = new Producto();
//se conecta a la BD
$conexion->conectar();

//llena los datos de producto
$proveedorID=$_POST["proveedorID"];
$pr->setNumeroPieza($_POST["numPiezas"]);
$pr->setNombrePieza($_POST["nombre"]);
$pr->setDescripcion($_POST["descripcion"]);
$pr->setPrecio($_POST["precio"]);

//se agrega a la BD
if($conexion->insertar("INSERT INTO producto (proveedorID,numPiezas,nombre,descripcion,precio) VALUES ("
	.$proveedorID.", "
	."\"".$pr->getNumeroPieza()."\"".", "
	."\"".$pr->getNombrePieza()."\"".", "
	."\"".$pr->getDescripcion()."\"".", "
	."\"".$pr->getPrecio()."\"".");"))
{
	echo '<script type="text/javascript">
	alert("Registro añadido correctamente");
	window.location.href="../Inventario.php";
	</script>';
}
else{
	echo '<script type="text/javascript">
	alert("Error, no se puede agregar el registro");
	window.location.href="../Inventario.php";
	</script>';
}
?>
