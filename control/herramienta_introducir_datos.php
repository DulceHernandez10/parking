<?php
class Herramienta{
	private $conexion;

	function __construct(){
		require_once("conexion_privada.php");
		$this->conexion = new conexion();
		$this->conexion->conectar();
	}

	public function ingresar_datos($dis_php){
		$sql = "INSERT INTO historial_e (fecha_ingreso, fecha_salida, nombre_e, usuario_u, foto_u, distancia)VALUES (NOW(), null, null, null,null, ?) ";
		$stmt = $this->conexion->conexion->prepare($sql);

		$stmt->bindValue(1, $dis_php);
		

		if($stmt->execute()){
			echo "Ingreso Exitoso";
		}else{
			echo "no se pudo registrar datos";
		}
	}
}
?>