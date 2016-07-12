<?php
class Conection{
	public function Conectar() {
		$mysqli = new mysqli('127.0.0.1','root', '','ar_historico');
		$mysqli->set_charset("utf8");
		if ($mysqli->connect_errno) {
			echo "Error al contenctar a MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
			exit();
		}

		#echo $mysqli->host_info. " Test en Conection.php";
		return $mysqli;
	}
}
?>