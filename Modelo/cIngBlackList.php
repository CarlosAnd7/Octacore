<?php
include_once("./conexion.php");
$conexion=new Conexion();
$conexion->conectar();
$id = $_GET["id"];


$con=$conexion->con;
$cliente="SELECT * FROM cliente WHERE clienteID=$id";
$registros = mysqli_query($con, $cliente);
while ($row = mysqli_fetch_array($registros)) {
  if($conexion->actualizar("UPDATE cliente SET perteneceBL=1 WHERE clienteID=".$row["clienteID"].";") && 
  $conexion->insertar("INSERT INTO blacklist(clienteID,telefono, nombreCompleto, direccion, correo) VALUES ("
    .$row["clienteID"].", "
    .$row["telefono"].", "
    ."'".$row["nombreCompleto"]."', "
    ."'".$row["direccion"]."', "
    ."'".$row["correo"]."'"
    .");"))
  {
      echo '<script type="text/javascript">
      alert("Cliente añadido a blacklist");
      window.location.href="../BlackList.php";
      </script>';
  }
  else{
    echo '<script type="text/javascript">
      alert("Error, no se puede agregar a la blacklist");
      window.location.href="../ingBlackList.php";
      </script>';
  }
}
?>