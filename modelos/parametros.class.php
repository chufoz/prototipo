<?php

abstract class ParametrosConexion
{
/* -----------Variables de conexion----------------------------> */ 
    private $_USUARIO = "root";
    private $_PASSWORD = "";
    private $_PUERTO="3306";
    private $_BD="bd_eqgg";
    private $_SERVIDOR="localhost";

    protected function ParametrosConexion()
        { 
            return $dsn= explode('#','mysql:host='.$this->_SERVIDOR.';port='.$this->_PUERTO.';dbname='.$this->_BD.'#'.$this->_USUARIO.'#'.$this->_PASSWORD);
        }//genera el primer parametro para la conexion de PDO

   /*Atravez de estas interfaces se puede alterar las variables de conexion*/
    abstract protected function setUsuario($usuario);
    abstract protected function setPassword($password);
    abstract protected function setPuerto($puerto);
    abstract protected function setBaseDatos($puerto);
    abstract protected function setServidor($servidor);
    
}//fin de las clase abstracta de paremetros de conexion

?>

