<?php 
include_once("./modelo/conexion.php");
$conexion=new Conexion();
$conexion->conectar();

$id = $_POST["id"];
$nombreCompleto = $_POST["nombreCompleto"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];

$con=$conexion->con;
$cliente="SELECT * FROM cliente WHERE clienteID=".$id;

//Leer registro cliente
$registros = mysqli_query($con, $cliente);

//verifica y actualiza los cambios que se hayan hecho:
//variable por si surge algún error en los query
$ok=true;
while ($row = mysqli_fetch_array($registros)) {
    
    //si no hay cambios manda alerta y no hace nada
    if(($nombreCompleto==$row["nombreCompleto"]||$nombreCompleto=="") && 
        ($telefono==$row["telefono"] || $telefono=="") && 
        ($direccion==$row["direccion"] || $direccion=="") && 
        ($correo==$row["correo"] || $correo=="")
        ){
        echo "<script> 
        alert('No hay cambios que realizar'); 
        window.location.href='./Cliente.php';
        </script>";
        
    }

    //si sí hay cambios hace un update por cada uno, también actualiza en blacklist si está en ella
    else{
        //está o no en blacklist
        $pertenece=$row["perteneceBL"];

        if($nombreCompleto!=$row["nombreCompleto"]){
            $ok=$conexion->actualizar("UPDATE cliente SET nombreCompleto = '".$nombreCompleto."' WHERE clienteID=". $id .";");
            if($pertenece==1){
                $ok=$conexion->actualizar("UPDATE blacklist SET nombreCompleto = '".$nombreCompleto."' WHERE clienteID=". $id .";");
            }
        }
        if(isset($telefono) && $telefono!=$row["telefono"]){
            $ok=$conexion->actualizar("UPDATE cliente SET telefono = ".$telefono." WHERE clienteID=". $id .";");
            if($pertenece==1){
                $ok=$conexion->actualizar("UPDATE blacklist SET telefono = '".$telefono."' WHERE clienteID=". $id .";");
            }
        }
        if(isset($direccion) && $direccion!=$row["direccion"]){
            $ok=$conexion->actualizar("UPDATE cliente SET direccion = '".$direccion."' WHERE clienteID=". $id .";");
            if($pertenece==1){
                $ok=$conexion->actualizar("UPDATE blacklist SET direccion = '".$direccion."' WHERE clienteID=". $id .";");
            }
        }
        if(isset($correo) && $correo!=$row["correo"]){
            $ok=$conexion->actualizar("UPDATE cliente SET correo = '".$correo."' WHERE clienteID=". $id .";");
            if($pertenece==1){
                $ok=$conexion->actualizar("UPDATE blacklist SET correo = '".$correo."' WHERE clienteID=". $id .";");
            }
        }
        $conexion->desconectar();
        echo "<script> 
        alert('Registro actualizado'); 
        window.location.href='./Cliente.php';
        </script>";
    }
}
if (!$ok){
    echo "<script> 
        alert('Error inesperado, no se pudo actualizar'); 
        window.location.href='./Cliente.php';
        </script>";
}

?>