<?php

class Acciones{

	private $cnn;
		function __construct(){
		require "../core/conexion.php";
		$con=new Conection();
		$this->cnn = $con->Conectar();
		return $this->cnn;
	}
	
		public function editar($id,$a_pate,$a_mate,$nomb,$inicio,$fin,$serie,$causa,$folios,$caja,$libro,$procedencia,$provincia,$observ){
		$consulta="UPDATE jueces SET a_paterno='$a_pate',a_materno='$a_mate',nombres='$nomb',inicio='$inicio',final='$fin',serie_documental='$serie',causa='$causa',cant_folios='$folios',nro_caja='$caja',nro_libro='$libro',procedencia='$procedencia',provincia='$provincia',observacion='$observ' WHERE id_persona='$id'";		
		$sql = $this->cnn->query($consulta);
	}
	
	
	public function insertar($a_pate,$a_mate,$nomb,$inicio,$fin,$serie,$causa,$folios,$caja,$libro,$procedencia,$provincia,$observ){
		$consulta = "INSERT INTO jueces VALUES ('','$a_pate','$a_mate','$nomb','$inicio','$fin','$serie','$causa','$folios','$caja','$libro','$procedencia','$provincia','$observ')";
		$query = $this->cnn->query($consulta);
	}
	
	public function eliminar($id){
		$consulta = "DELETE FROM jueces WHERE id_persona='$id'";
		$this->cnn->query($consulta);
	}
	
}
	
?>