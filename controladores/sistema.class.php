<?php
/*Autor: Raul Ramirez Gutierrez*/
include_once 'terminator.inc.php';
class sistema
{

public function ingresaSistema($usuario,$password)
{
    $terminator = new T800();
     date_default_timezone_set('America/Mexico_City');
     $datetime = date('Y-m-d H:i:s');
    $parametros = array($usuario,$terminator->seguridadPassword($password,$datetime,1),$datetime);
    parent::ejecutaConsultas("INSERT INTO jc_identificaciones (usuario_identificacion,password_identificacion,fecha_identificacion) 
     VALUES (?,?,?)",$parametros);
    
}


}//fin de la clase
