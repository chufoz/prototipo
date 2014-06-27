<?php
include_once '../modelos/conector_mysql.inc.php';
class controladorentidad extends ConexionMysql{

    public function pruebaconsulta(){
       $tablausuarios="";
       parent::ejecutaConsultas("Select FULLNAME as nombre from CRMloginusers");
       while ($datos = $this->_QUERY->fetch()):
        $tablausuarios.="<tr><td>".$datos['nombre']."</td></tr>";
      endwhile;
      return $tablausuarios;
        
   }
 }
   ?>