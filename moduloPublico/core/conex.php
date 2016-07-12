<?php

class Conectar{

	public function conecta(){
		$cnn = new mysqli('127.0.0.1','root','','ar_historico');
		$cnn->set_charset('utf-8');
		if($cnn->connect_errno){
			echo "Error al conectarse a la BD",$cnn->connect_errno;	
		}
		else return $cnn;
	}
	
}