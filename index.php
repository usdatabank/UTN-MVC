<?php
    require_once("controladores/controlador.php");
    require_once("controladores/formularios.php");
    require_once("modelos/conexion.php");
    require_once("modelos/formularios.modelos.php");

    # instanciar objetos
    $control = new ControladorUDB();

    #ejecutar el metodo (funcion)
    $control->ctrPlantilla();
?>