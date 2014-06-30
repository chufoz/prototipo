<?php
 require_once '../controladores/seguridad.class.php';
 $seguridad = new AccesoSistema();
	switch ($_POST['actividad']) {
	case 1:
            if(!empty($_POST['usuario'])&& !empty($_POST['password']))
            {
            $seguridad->validacionDatos(trim($_POST['usuario']),trim($_POST['password']));
            }
             else{
               echo "4#<strong>Error ! </strong>Existen campos vacios, Favor de verificarlos";
			}		
			break;

}
?>