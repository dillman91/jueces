<?php //namespace model

    class VerificarUsuario
     {
            private $mysqli;

            function __construct(){
                 require_once "../core/conexion.php";
                 $conne = new Conection();
                 $this->mysqli = $conne->conectar();
                 return $this->mysqli;
             }

            function ValidarUser($usuario,$password){

                 $sql ="SELECT id_persona, nivel FROM usuarios WHERE user = '$usuario' AND pass = '$password'";
                 $valor = $this->mysqli->query($sql);
			     $data = $valor->fetch_assoc();
			     return $data;
             }
      }

?>