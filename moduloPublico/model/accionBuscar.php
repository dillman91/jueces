<?php

class Buscar{
	
	private $conecta;
	
	function __construct(){
		require "../core/conex.php";
		$ax= new Conectar();
		$this->conecta=$ax->conecta();
		return $this->conecta;
	}
	
	public function buscarGeneral($nombres,$serie,$causa,$procedencia,$provincia){
			$consulta = "SELECT CONCAT(nombres,' ',a_paterno,' ',a_materno),id_persona,inicio,final,serie_documental,causa,cant_folios,nro_caja,nro_libro,procedencia,provincia,observacion FROM jueces 
			WHERE 
				CONCAT(nombres,' ',a_paterno,' ',a_materno) LIKE '%$nombres%'
				AND serie_documental LIKE '%$serie%'
				AND causa LIKE '%$causa%'
				AND procedencia LIKE '%$procedencia%'
				AND provincia LIKE '%$provincia%'
			";
			$query = $this->conecta->query($consulta);
			return $query;
		}	
}
?>