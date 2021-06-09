<?php 
include_once("modelo/conexion.php");
$conexion=new Conexion();
$conexion->conectar();

$id = $_POST["id"];
$numPiezas = $_POST["numPiezas"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$proveedorID = $_POST["proveedorID"];

$con=$conexion->con;
$producto="SELECT * FROM producto WHERE productoID=".$id;

//Leer registro producto
$registros = mysqli_query($con, $producto);

//verifica y actualiza los cambios que se hayan hecho:
$ok=true;//variable por si surge algún error en los query
while ($row = mysqli_fetch_array($registros)) {
    
    //si no hay cambios manda alerta y no hace nada
    if(($numPiezas==$row["numPiezas"]||$numPiezas=="") && 
        ($nombre==$row["nombre"] || $nombre=="") && 
        ($descripcion==$row["descripcion"] || $descripcion=="") && 
        ($precio==$row["precio"] || $precio=="") 
        ){
        echo "<script> 
        alert('No hay cambios que realizar'); 
        window.location.href='Inventario.php';
        </script>";
        
    }

    //si sí hay cambios hace un update por cada uno
    else{
        if($numPiezas!=$row["numPiezas"]){
            $ok=$conexion->actualizar("UPDATE producto SET numPiezas = '".$numPiezas."' WHERE productoID=". $id .";");
        }
        if($nombre!=$row["nombre"]){
            $ok=$conexion->actualizar("UPDATE producto SET nombre = '".$nombre."' WHERE productoID=". $id .";");
        }
        if($descripcion!=$row["descripcion"]){
            $ok=$conexion->actualizar("UPDATE producto SET descripcion = '".$descripcion."' WHERE productoID=". $id .";");
        }
        if($precio!=$row["precio"]){
            $ok=$conexion->actualizar("UPDATE producto SET precio = '".$precio."' WHERE productoID=". $id .";");
        }
        $conexion->desconectar();
        echo "<script> 
        alert('Registro actualizado'); 
        window.location.href='Inventario.php';
        </script>";
    }
}
if (!$ok){
    echo "<script> 
        alert('Error inesperado, no se pudo actualizar'); 
        window.location.href='Inventario.php';
        </script>";
}

?>