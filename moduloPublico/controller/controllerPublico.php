<?php
class controllerPub{
	private $conex;
	function __construct(){
		require "../model/accionBuscar.php";
		$arp = new Buscar();
		$this->conex=$arp;
		return $this->conex;
		
	}
	
	function controllerGeneral(){
			$nombre = $_REQUEST['nombre'];
			$serie	= $_REQUEST['serie'];
			$causa	=$_REQUEST['causa'];
			$procedencia = $_REQUEST['procedencia'];
			$provincia	=$_REQUEST['provincia'];
			$per = $this->conex->buscarGeneral($nombre,$serie,$causa,$procedencia,$provincia);
			return $per;
			header("Location: ../index.php");
	}

}
$rr = new controllerPub();
$rr -> controllerGeneral();
?>