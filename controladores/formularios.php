<?php

    class ControladorFormulario{
        #registro de usuario
        static public function RegistroUsuario(){
            #recibimos datos para registrar un nuevo fan del cafe
            if (isset($_POST["btregistra"])) {
                $tabla = "usuarios";
                $datos = array(
                    "nombre" => $_POST["n_nombre"],
                    "apellido" => $_POST["n_apellido"],
                    "email" => $_POST["n_email"]
                );
                $resultado = ModeloFormulario::modRegistro($tabla, $datos);
                return $resultado;
            }
            #eliminamos un fan del cafe que desea dejar de recibir notificaciones

        }
    }
?>