<?php
    require_once("conexion.php");
    
    class ModeloFormulario{
        #insertamos registro de usuario
        static public function modRegistro($tabla, $datos){
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, apellido, email, password) VALUES (:nombre, :apellido, :email, :password)");
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                # nos devuelve el error si se produce
                return "OK";
            }else {
                print_r(Conexion::conectar()->errorInfo());
            }

            #cerramos la conexion a la base de datos
            $stmt->closeCursor();
            $stmt = null;
        }    
    }
?>