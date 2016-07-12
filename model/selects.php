<?php
class Selecciones{
	
	private $cone;
	
	function __construct(){
		require "../core/conexion.php";
		$conx = new Conection();
		$this->cone= $conx->Conectar();
		return $this->cone;	
	}
	
	public function seleccionarTodo(){
		$consul = "SELECT * FROM jueces";
		$xp = $this->cone->query($consul);
		return $xp;
	}
	

	public function id_juez($id_juez){
		$consul1="SELECT * FROM jueces WHERE id_persona='$id_juez'";
		$xp = $this->cone->query($consul1);
		return $xp;
	}


	public function buscador($nombres,$serie,$causa,$procedencia,$provincia){
			$consulta = "SELECT CONCAT(nombres,' ',a_paterno,' ',a_materno),id_persona,inicio,final,serie_documental,causa,cant_folios,nro_caja,nro_libro,procedencia,provincia,observacion FROM jueces 
			WHERE 
				CONCAT(nombres,' ',a_paterno,' ',a_materno) LIKE '%$nombres%'
				AND serie_documental LIKE '%$serie%'
				AND causa LIKE '%$causa%'
				AND procedencia LIKE '%$procedencia%'
				AND provincia LIKE '%$provincia%'
			";
			$query = $this->cone->query($consulta);
			return $query;	
		}
	}
	

?>