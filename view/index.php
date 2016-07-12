<?php
session_start();
if (!isset($_SESSION['Administrador'])){
	session_unset();
	session_destroy();
header("location: ../moduloPublico/web/index.html"); 
}	
?>