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
        }
        #elimacion de subscripcion a las novedades
        static public function EliminaSocio(){
            #recibimos datos del socio que se dara de baja
            if(isset($_POST["bteliminar"])) {
                $tabla = "usuarios";
                $datos = array(
                    "email" => $_POST["e_email"]
                );
                $resultado = Desubscribir::eliminaSocio($tabla, $datos);
                return $resultado;
            }
        }
    }
?>