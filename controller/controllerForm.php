<?php

class Tareas{
	
	private $condic;
		
		function __construct(){
			require_once "../model/accionesBasicas.php";
			$this->condic = new Acciones();
			return $this->condic;
		}
	
	public function inserta_juez(){
		$a_pate		= strtoupper($_REQUEST['ap_paterno']);
		$a_mate		= strtoupper($_REQUEST['ap_materno']);
		$nomb		= strtoupper($_REQUEST['nombres']);
		$inicio		= strtoupper($_REQUEST['inicio']);
		$fin		= strtoupper($_REQUEST['fin']);
		$serie		= strtoupper($_REQUEST['serie']);
		$causa		= strtoupper($_REQUEST['causa']);
		$folios		= strtoupper($_REQUEST['folios']);
		$caja		= strtoupper($_REQUEST['caja']);
		$libro		= strtoupper($_REQUEST['libro']);
		$procedencia= strtoupper($_REQUEST['procedencia']);
		$provincia	= strtoupper($_REQUEST['provincia']);
		$observ		= strtoupper($_REQUEST['observacion']);
		
		$this->condic->insertar($a_pate,$a_mate,$nomb,$inicio,$fin,$serie,$causa,$folios,$caja,$libro,$procedencia,$provincia,$observ);
		header("Location: ../view/mostrarTodos.php?mensaje=REGISTRO INSERTADO CON EXITO");
	}
	
	public function edita_juez(){
		$id	 		= $_REQUEST['id'];
		
		$a_pate		= strtoupper($_REQUEST['ap_paterno']);
		$a_mate		= strtoupper($_REQUEST['ap_materno']);
		$nomb		= strtoupper($_REQUEST['nombres']);
		$inicio		= strtoupper($_REQUEST['inicio']);
		$fin		= strtoupper($_REQUEST['fin']);
		$serie		= strtoupper($_REQUEST['serie']);
		$causa		= strtoupper($_REQUEST['causa']);
		$folios		= strtoupper($_REQUEST['folios']);
		$caja		= strtoupper($_REQUEST['caja']);
		$libro		= strtoupper($_REQUEST['libro']);
		$procedencia= strtoupper($_REQUEST['procedencia']);
		$provincia	= strtoupper($_REQUEST['provincia']);
		$observ		= strtoupper($_REQUEST['observacion']);
		
		$query = $this->condic->editar($id,$a_pate,$a_mate,$nomb,$inicio,$fin,$serie,$causa,$folios,$caja,$libro,$procedencia,$provincia,$observ);
		header("Location: ../view/mostrarTodos.php?mensaje=Registro Numero ".$id." EDITADO");
	}
	
	public function elimina_juez(){
		$id	   = $_REQUEST['id_eliminar'];
		$query = $this->condic->eliminar($id);
		header("Location: ../view/mostrarTodos.php?mensaje=Registro Numero ".$id." ELIMINADO");
	}
}

#####--------- ACCIONES BOTONES ---------#####
	if(isset($_REQUEST['btnFormulario'])){
		$aa=new Tareas();
		$aa->inserta_juez();
	}
	
	if(isset($_REQUEST['btnEditar'])){
		$bb=new Tareas();
		$bb->edita_juez();
	}

	if(isset($_REQUEST['id_eliminar'])){
		$cc=new Tareas();
		$cc->elimina_juez();
	}
?>