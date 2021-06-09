<?php
include_once("conexion.php");
$conexion=new Conexion();
$conexion->conectar();
$id = $_GET["id"];
//$conexion->eliminar("DELETE FROM cliente WHERE clienteID=". $id .";");
$conexion->eliminar("DELETE FROM dispositivo WHERE clienteID=". $id .";");
$conexion->actualizar("UPDATE blacklist SET clienteID=null WHERE clienteID=". $id .";");
if($conexion->eliminar("DELETE FROM cliente WHERE clienteID=". $id .";")){
    echo '<script type="text/javascript">
			alert("Registro eliminado");
			window.location.href="../Cliente.php";
			</script>';
}
else{
    echo '<script type="text/javascript">
			alert("Error, no se puede eliminar el registro");
			window.location.href="../delCliente.php";
			</script>';
}
$conexion->desconectar();
//header("location:Cliente.php");
?>
