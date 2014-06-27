<?
class controladorentidad extends ConexionMysql{

    public function pruebaconsulta()
         {
       $tablausuarios="";
       parent::ejecutaConsultas("Select FULLNAME from CRMloginusers");
       while ($datos = $this->_QUERY->fetch()):
        $tablausuarios.="<tr><td>".$datos['nombre']"'/></td></tr>";
      endwhile;
      return $tablausuarios;
        
   }
   ?>