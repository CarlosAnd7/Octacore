<?php
// solo se va a utilizar el procedimiento registrarPago de la BD
include_once("conexion.php");
$conexion = new Conexion();

//se conecta a la BD
$conexion->conectar();
//llena los datos de capital
$clase=$_POST["clase"];
$trabajoID=$_POST["trabajoID"];
//$historialTrabajoID=$_POST["historialTrabajoID"];
$montoCobro=$_POST["montoCobro"];
$tipoPago=$_POST["tipoPago"];
$fecha=$_POST["fecha"];

//se utiliza procedimiento para agregar capital, egresar dispositivo y agregar historial de dispositivo
if($conexion->call("CALL registrarPago("
	.$trabajoID.", "
	.$montoCobro.", "
	."'".$tipoPago."', "
	."'".$fecha."'"
	.");")
	){
		//se regresa de acuerdo a la página de donde se haya llamado esta clase
		if($clase=="dispositivo"){
			echo '<script type="text/javascript">
			alert("Dispositivo egresado correctamente");
			window.location.href="../Dispositivo.php";
			</script>';
		}
		else{ 
			echo '<script type="text/javascript">
			alert("Registro añadido correctamente");
			window.location.href="../Capital.php";
			</script>';
		}
}
else{
	if($clase=="dispositivo"){
		echo '<script type="text/javascript">
		alert("Error, no se puede agregar el registro");
		window.location.href="../Dispositivo.php";
		</script>';
	}
	else{ 
		echo '<script type="text/javascript">
		alert("Error, no se puede agregar el registro");
		window.location.href="../Capital.php";
		</script>';
	}
}
?>
