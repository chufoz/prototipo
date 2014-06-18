<?php 
require_once "../controladores/seguridad.class.php";
$ingresa = new AccesoSistema();
$actividad = (empty($_POST['actividad'])) ? 666 : $_POST['actividad'];
switch ($actividad) {
    case 1:
        $ingresa->ingresaSistema($_POST['usuario'], $_POST['password']);
    break;
	default :
}//fin swicht

 ?>