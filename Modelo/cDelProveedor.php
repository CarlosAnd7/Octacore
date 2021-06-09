<?php
include_once("conexion.php");
$conexion=new Conexion();
$conexion->conectar();
$id = $_GET["id"];
//$conexion->eliminar("DELETE FROM proveedor WHERE proveedorID=". $id .";");
if($conexion->eliminar("DELETE FROM proveedor WHERE proveedorID=". $id .";")){
    echo '<script type="text/javascript">
			alert("Registro eliminado");
			window.location.href="../Proveedores.php";
			</script>';
} else {
	if ("<script> alerta(); </script>"){
		$conexion->eliminar("DELETE FROM producto WHERE proveedorID=" . $id . ";");
		$conexion->eliminar("DELETE FROM proveedor WHERE proveedorID=" . $id . ";");
		echo "<script> alert('Registro eliminado'); </script>";	
	}
	echo
	"<script> window.location.href='../delProveedor.php';</script>";
}
$conexion->desconectar();
//header("location:Cliente.php");

?>

<script>
	function alerta() {
		var mensaje = "Hay productos relacionados con este proveedor que también serán eliminados, ¿desea continuar?";
		var opcion = confirm(mensaje);
		return opcion;
	}
</script>