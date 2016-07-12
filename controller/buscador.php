<?php
class Busqueda{
	
	private $mostrar;
	
	
		function __construct(){
		require "../model/selects.php";	
		$bus = new Selecciones();
		$this->mostrar = $bus->buscador();;
		return $this->mostrar;
		}
	
	
		public function buscar(){
			$nombres= $_REQUEST['nombre'];
			$serie= $_REQUEST['serie'];
			$causa= $_REQUEST['causa'];
			$procedencia= $_REQUEST['procedencia'];
			$provincia= $_REQUEST['provincia'];
			$array = $this->mostrar->buscador($nombres,$serie,$causa,$procedencia,$provincia);
			return $array;
		#header('Location: ../view/buscarPublico.php');
		}

}
		if(isset($_REQUEST['btnBusca'])){
			$x = new Busqueda();
			$f = $x->buscar();
			return $f;
		}
?>