<?php //namespace controller
    
    session_start();

        function VerificarUsuario(){

                    $usuario    = $_POST['user'];
                    $contraseña = $_POST['pass'];

                $user_limpio = strtolower(trim($usuario));
        		$pass_limpio = strtolower(trim($contraseña));

		        $data = Pregunta($user_limpio,$pass_limpio);

                switch ($data['nivel']) {
                    case 1:
                        $_SESSION['Administrador'] = $data['id_persona'];
                        header("Location: ../view/menuPrincipal.php");
                        break;
                    case 2:
                        $_SESSION['Buscador'] = $data['id_persona'];
                        echo "Personal";
                        header("Location: ../Hola.php");
                        break;
                    case 3:
                        $_SESSION['Publico'] = $data['id_persona'];
                        echo "Busqueda";
                        header("Location: ../../public/web/index.php");
                        break;
                }

        }

        function Pregunta($username, $pass){

             require_once "../model/VerificarUsuario.php";

            $verificarusuario = new VerificarUsuario();
            $data = $verificarusuario->ValidarUser($username,$pass);
            

             if($data['id_persona'] > 0)
             {
             	$idpersona = $data;
             }
             else
             {
                $idpersona = "USUARIO NO ENCONTRADO";
                header("location: ../moduloPublico/web/index.php?error=$idpersona");

             }

             return $idpersona;
        }

         VerificarUsuario();
?>