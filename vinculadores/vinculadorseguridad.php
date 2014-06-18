<?php
 require_once '../controladores/seguridad.class.php';
 require_once '../controladores/sistema.class.php';
 $seguridad = new AccesoSistema();
 $encripta = new sistema();
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
     case 2:
            if(!empty($_POST['usuario'])&& !empty($_POST['password']))
            {
            $encripta->ingresaSistema(trim($_POST['usuario']), trim($_POST['password']));
            }
            else{
               echo "4#<strong>Error ! </strong>Existen campos vacios, Favor de verificarlos";
			}			
		break;

}
?>