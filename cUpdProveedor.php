<?php 
include_once("./modelo/conexion.php");
$conexion=new Conexion();
$conexion->conectar();

$id = $_POST["id"];
$nombreProveedor = $_POST["nombreProveedor"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$empresa = $_POST["empresa"];

$con=$conexion->con;
$proveedor="SELECT * FROM proveedor WHERE proveedorID=".$id;

//Leer registro proveedor
$registros = mysqli_query($con, $proveedor);

//verifica y actualiza los cambios que se hayan hecho:
$ok=true;//variable por si surge algún error en los query
while ($row = mysqli_fetch_array($registros)) {
    
    //si no hay cambios manda alerta y no hace nada
    if(($nombreProveedor==$row["nombreProveedor"]||$nombreProveedor=="") && 
        ($telefono==$row["telefono"] || $telefono=="") && 
        ($direccion==$row["direccion"] || $direccion=="") && 
        ($correo==$row["correo"] || $correo=="") &&
        ($empresa==$row["empresa"] || $empresa=="")
        ){
        echo "<script> 
        alert('No hay cambios que realizar'); 
        window.location.href='./Proveedores.php';
        </script>";
        
    }

    //si sí hay cambios hace un update por cada uno
    else{
        
        if($nombreProveedor!=$row["nombreProveedor"]){
            $ok=$conexion->actualizar("UPDATE proveedor SET nombreProveedor = '".$nombreProveedor."' WHERE proveedorID=". $id .";");
        }
        if($telefono!=$row["telefono"]){
            $ok=$conexion->actualizar("UPDATE proveedor SET telefono = ".$telefono." WHERE proveedorID=". $id .";");
        }
        if($direccion!=$row["direccion"]){
            $ok=$conexion->actualizar("UPDATE proveedor SET direccion = '".$direccion."' WHERE proveedorID=". $id .";");
        }
        if($correo!=$row["correo"]){
            $ok=$conexion->actualizar("UPDATE proveedor SET correo = '".$correo."' WHERE proveedorID=". $id .";");
        }
        if($empresa!=$row["empresa"]){
            $ok=$conexion->actualizar("UPDATE proveedor SET empresa = '".$empresa."' WHERE proveedorID=". $id .";");
        }
        $conexion->desconectar();
        echo "<script> 
        alert('Registro actualizado'); 
        window.location.href='./Proveedores.php';
        </script>";
    }
}
if (!$ok){
    echo "<script> 
        alert('Error inesperado, no se pudo actualizar'); 
        window.location.href='./Proveedores.php';
        </script>";
}

?>