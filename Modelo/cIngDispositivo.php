<?php
include_once("./conexion.php");
$conexion = new Conexion();
//se conecta a la BD
$conexion->conectar();
$marca=$_POST["marca"];
$modelo=$_POST["modelo"];
$descripcion=$_POST["descripcion"];
$trabajoRequerido=$_POST["trabajoRequerido"];
$contrasena=$_POST["contrasena"];
$fechaEntrega=$_POST["fechaEntrega"];
$clienteID=$_POST["clienteID"];
//el nuevo cliente se agrega a la BD
if($conexion->insertar("INSERT INTO dispositivo (marca,modelo,descripcion,trabajoRequerido,contrasena,fechaEntrega,clienteID) VALUES (\"".
$marca."\",\"".
$modelo."\",\"".
$descripcion."\",\"".
$trabajoRequerido."\",\"".
$contrasena."\",\"".
$fechaEntrega."\",".
$clienteID.
");"))
{
    echo '<script type="text/javascript">
    alert("Registro añadido correctamente");
    window.location.href="../Dispositivo.php";
    </script>';
}
else{
echo '<script type="text/javascript">
    alert("Error, no se puede agregar el registro");
    window.location.href="../ingDispositivo.php";
    </script>';
}
$conexion->desconectar();
//mostrar ventana que anuncie query exitoso o el error con botón aceptar para que se regrese a Dispositivo.php?
//header("location:Dispositivo.php");
?>
