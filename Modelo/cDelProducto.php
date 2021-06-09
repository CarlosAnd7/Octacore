<?php
include_once("conexion.php");
$conexion=new Conexion();
$conexion->conectar();
$id = $_GET["id"];
if($conexion->eliminar("DELETE FROM producto WHERE productoID=". $id .";")){
    echo '<script type="text/javascript">
			alert("Registro eliminado");
			window.location.href="../Inventario.php";
			</script>';
}
else{
    echo '<script type="text/javascript">
			alert("Error, no se puede eliminar el registro");
			window.location.href="../delProducto.php";
			</script>';
}
$conexion->desconectar();
//header("location:Cliente.php");
?>
