<?php
    #preparamos la conexion a la base de datos
    class Conexion{
        static public function conectar(){
            $enlace = new PDO("mysql:host=179.43.127.123; port=3306; dbname=usdata_utn", "usdata_utn","Utn2022");
            $enlace->exec("set names utf8");
            return $enlace;
        }
    }

    
?>