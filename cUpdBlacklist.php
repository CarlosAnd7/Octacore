<?php 
include_once("modelo/conexion.php");
$conexion=new Conexion();
$conexion->conectar();

$id = $_POST["id"];
$clienteID = $_POST["clienteID"];
$nombreCompleto = $_POST["nombreCompleto"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];

$con=$conexion->con;
$cliente="SELECT * FROM blacklist WHERE idBlacklist=".$id;

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
        window.location.href='./BlackList.php';
        </script>";
        
    }

    //si sí hay cambios hace un update por cada uno, también actualiza en blacklist si está en ella
    else{
        //está o no en blacklist
        //se ve feo pero de otra forma no funciona xd
     

        if($nombreCompleto!=$row["nombreCompleto"]){
            if($row["clienteID"]!=null){
                $ok=$conexion->actualizar("UPDATE cliente SET nombreCompleto = '".$nombreCompleto."' WHERE clienteID=". $clienteID .";");
            }
            $ok=$conexion->actualizar("UPDATE blacklist SET nombreCompleto = '".$nombreCompleto."' WHERE idBlacklist=". $id .";");
        }
        if(isset($telefono) && $telefono!=$row["telefono"]){
            if($row["clienteID"]!=null){
                $ok=$conexion->actualizar("UPDATE cliente SET telefono = ".$telefono." WHERE clienteID=". $clienteID .";");
            }
            $ok=$conexion->actualizar("UPDATE blacklist SET telefono = '".$telefono."' WHERE idBlacklist=". $id .";");
        }
        if(isset($direccion) && $direccion!=$row["direccion"]){
            if($row["clienteID"]!=null){
                $ok=$conexion->actualizar("UPDATE cliente SET direccion = '".$direccion."' WHERE clienteID=". $clienteID .";");
            }
            $ok=$conexion->actualizar("UPDATE blacklist SET direccion = '".$direccion."' WHERE idBlacklist=". $id .";");
        }
        if(isset($correo) && $correo!=$row["correo"]){
            if($row["clienteID"]!=null){
                $ok=$conexion->actualizar("UPDATE cliente SET correo = '".$correo."' WHERE clienteID=". $clienteID .";");
            }
            $ok=$conexion->actualizar("UPDATE blacklist SET correo = '".$correo."' WHERE idBlacklist=". $id .";");
        }
        $conexion->desconectar();
        echo "<script> 
        alert('Registro actualizado'); 
        window.location.href='./BlackList.php';
        </script>";
    }
}
if (!$ok){
    echo "<script> 
        alert('Error inesperado, no se pudo actualizar'); 
        window.location.href='./BlackList.php';
        </script>";
}

?>