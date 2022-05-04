<?php

    class ControladorFormulario{
        #registro de usuario
        static public function RegistroUsuario(){
            if (isset($_POST["btregistra"])) {
                $tabla = "usuarios";
                $datos = array(
                    "nombre" => $_POST["n_nombre"],
                    "apellido" => $_POST["n_apellido"],
                    "email" => $_POST["n_email"],
                    "password" => $_POST["n_pswd"]
                );
                $resultado = ModeloFormulario::modRegistro($tabla, $datos);
                return $resultado;
            }
        }
    }
?>