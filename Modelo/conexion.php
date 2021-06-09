<?php
/*************************************************************/
/* conexion.php
 * Objetivo: clase que encapsula el acceso a la base de datos octacore
 * Autor:
 *************************************************************/

class Conexion{
	public $con=null;
	private $server="localhost";
	private $user="promay20_octacore";
	private $password="Contraseña123";
	private $db="promay20_octacore";
	private $port=3306;

	// private $server="localhost";
	// private $user="root";
	// private $password="";
	// private $db="octacorev8";
	// private $port=null;


	/*Realiza la conexión a la base de datos*/
	function conectar(){
		try{
			$this->con=new mysqli($this->server,$this->user,$this->password,$this->db,$this->port);
			if ($this->con->connect_errno) {
				die("Error de conexión: " . $this->con->connect_error);
			}
			else{
				// echo "Conectado exitosamente";
			}
		}catch(Exception $e){
			throw $e;
		}
	}

	/*Realiza la desconexión de la base de datos*/
	function desconectar(){
		if ($this->con != null){
			mysqli_close($this->con);
			$this->con=null;
		}
	}

	/*Inserta en la base de datos, recibe el query sql */
	function insertar($sql){
		try{
			//$this->conectar();
			$resultado = mysqli_query($this->con,$sql);
			if($resultado) {
				return true;
				// echo "Registro añadido correctamente";
			}
			else{
				echo $this->con->error;
				return false;
			}
			//$this->desconectar();
		}catch(Exception $e){
			throw $e;
			$this->desconectar();
		}
	}

	/*Actualiza en la base de datos, recibe el query sql */
	function actualizar($sql){
		try{
			//$this->conectar();
			$resultado = mysqli_query($this->con,$sql);
			if($resultado) {
				//echo "Registro actualizado con éxito";
				return true;
			}
			else{
				//echo $this->con->error;
				return false;
			}
			//$this->desconectar();
		}catch(Exception $e){
			throw $e;
			$this->desconectar();
		}
	}

	/*Elimina de la base de datos, recibe el query sql */
	function eliminar($sql){
		try{
			//$this->conectar();
			$resultado = mysqli_query($this->con,$sql);
			if($resultado) {
				//echo "Registro eliminado con éxito";
				return true;
			}
			else{
				//echo $this->con->error;
				return false;
			}
			//$this->desconectar();
		}catch(Exception $e){
			throw $e;
			echo $e;
			$this->desconectar();
		}
	}

	function call($sql){
		try{
			//$this->conectar();
			$resultado = mysqli_query($this->con,$sql);
			if($resultado) {
				//echo "éxito";
				return true;
			}
			else{
				echo $this->con->error;
				return false;
			}
			//$this->desconectar();
		}catch(Exception $e){
			throw $e;
			echo $e;
			$this->desconectar();
		}
	}

	/*Consulta en la base de datos y regresa nulo o el arreglo bidimensional de n filas y tantas columnas como campos se hayan solicitado en la consulta */
	function consultar($sql){
		$arrRS = null;
		$rst = null;
		$oLinea = null;
		$sValCol = "";
		$i=0;
		$j=0;

		try{
			$rst = $this->con->query($sql); //un objeto PDOStatement o falso en caso de error
		}catch(Exception $e){
			throw $e;
		}
		if ($rst){
			foreach($rst as $oLinea){
				foreach($oLinea as $llave=>$sValCol){
					if (is_string($llave)){
						$arrRS[$i][$j] = $sValCol;
						$j++;
					}
				}
				$j=0;
				$i++;
			}
		}
		return $arrRS;
	}


	/*Ejecuta en la base de datos la consulta que recibió por parámetro.
	Regresa
	Nulo si no hubo datos
	Un arreglo bidimensional de n filas y tantas columnas como campos se hayan
	solicitado en la consulta*/
	function ejecutarConsulta($psConsulta){
		$arrRS = null;
		$rst = null;
		$oLinea = null;
		$sValCol = "";
		$i=0;
		$j=0;
		if ($psConsulta == ""){
			throw new Exception("AccesoDatos->ejecutarConsulta: falta indicar la consulta");
		}
		if ($this->oConexion == null){
			throw new Exception("AccesoDatos->ejecutarConsulta: falta conectar la base");
		}
		try{
			$rst = $this->oConexion->query($psConsulta); //un objeto PDOStatement o falso en caso de error
		}catch(Exception $e){
			throw $e;
		}
		if ($rst){
			foreach($rst as $oLinea){
				foreach($oLinea as $llave=>$sValCol){
					if (is_string($llave)){
						$arrRS[$i][$j] = $sValCol;
						$j++;
					}
				}
				$j=0;
				$i++;
			}
		}
		return $arrRS;
	}

	/*Ejecuta en la base de datos el comando que recibió por parámetro
	Regresa el número de registros afectados por el comando*/
	function ejecutarComando($psComando){
	$nAfectados = -1;
		try{
			$nAfectados =$this->con->exec($psComando);
		}catch(Exception $e){
			throw $e;
		}
		return $nAfectados;
	}
}
?>
