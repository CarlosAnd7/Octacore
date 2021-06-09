<?php
include_once("conexion.php");
$conexion=new Conexion();
$conexion->conectar();
$trabajoID=$_GET["trabajoID"];
//pasando los datos a tabla HistorialTrabajo
$registros = mysqli_query($conexion->con,"SELECT * FROM dispositivo WHERE trabajoID=".$trabajoID);
while ($row = mysqli_fetch_array($registros)) {
    $marca=$row["marca"];
    $modelo=$row["modelo"];
    $descripcion=$row["descripcion"];
    $trabajoRequerido=$row["trabajoRequerido"];
    $contrasena=$row["contrasena"];
    $fechaEntrega=$row["fechaEntrega"];
}
$conexion->consultar("SELECT registrarPago();");
$conexion->insertar("INSERT INTO historialtrabajo (marca,modelo,descripcion,trabajoRequerido,contrasena,fechaEntrega) VALUES (\"".
$marca."\",\"".
$modelo."\",\"".
$descripcion."\",\"".
$trabajoRequerido."\",\"".
$contrasena."\",\"".
$fechaEntrega."\",\"".
"));");

//eliminandolo de tabla dispositivo
$conexion->eliminar("DELETE FROM capital WHERE trabajoID=".$_POST["trabajoID"].";");
if($conexion->eliminar("DELETE FROM dispositivo WHERE trabajoID=".$_POST["trabajoID"].";"))
{
echo '<script type="text/javascript">
			alert("Registro eliminado");
			window.location.href="../Dispositivo.php";
			</script>';
}
else{
    echo '<script type="text/javascript">
			alert("Error, no se puede eliminar el registro");
			window.location.href="../delDispositivo.php";
			</script>';
}
$conexion->desconectar();
//header("location:Dispositivo.php");
?>
