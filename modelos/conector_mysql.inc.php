<?php
require 'parametros.class.php';
class ConexionMysql extends ParametrosConexion{
/* ------variables de conexion--------------- */
    protected $_DEBUG = 1; //utilizacion para la visualizacion de errores
    protected $_CONEXION; //objeto de tipo conexion cuando establece el dsn en caso contrario esta variable es un null
    protected $_QUERY; // crea un objeto de tipo PDO atravez de la conexion esta puede 
    protected $_FILE = "logPrograma.log"; //archivo que llevara un reporte para los logs 
    private $_WRITTE="0";// esta variable si se tiene con el valor 0 cero no escribira el log para que pueda escribir en un log debe estar en 1
    private $_MODO=2;//esta variable te da un filtrado de informacion en cuestion del debug 1 arroja el valor por default 2 valor con linea de erores 3 error global
            
    function __construct() 
    {
        $this->establecerConexion(); //genera automaticamente una conexion cuando se crea el objero de la clase
    }//fin del constructor
    
    protected function terminarConexion()
        {
            unset($this->_CONEXION);
            unset($this->_QUERY);
        }//finaliza el metodo para terminar las conexiones

    public function establecerConexion()
        {
            list($recurso,$user,$pass) = parent::ParametrosConexion();//estable una lista de parametros para generar el dsn
                try {//establece la conexion
                        $this->_CONEXION = new PDO($recurso,$user,$pass,array(PDO::ATTR_PERSISTENT => true , PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION )); 
                        //print "conexion  satisfactoria";
                    } 
                    catch (PDOException $error)
                    { //manejo de errores
                        print ($this->_DEBUG == 0) ? 'Existe un problema al intertar conectarse ala base de datos favor de verificar sus parametros':
                        $this->informacionDebug($error,$this->_MODO,$this->_WRITTE);//informacion especifica de errores
                        exit();
                    }       
        }//esta función establece la conexion hacia la base de datos
    
    
        protected function ejecutaConsultas($consulta,$array=null)
        {
            $this->_QUERY = $this->_CONEXION->prepare($consulta);
                try {
                    $this->_QUERY->execute($array);
                    return $this->_QUERY;
                    }//atrapando errores
                        catch (PDOException $error)
                        {
                         return $label = ($this->_DEBUG == 0) ? 'Existe un problema ala hora de procesar su consulta favor de verificar los parametros' : 
                         $this->informacionDebug($error,$this->_MODO,$this->_WRITTE); //informacion especifica de errores
                         exit();
                        }//fin de trycatch
        }//fin de la funcion que ejecuta Consultas realizadas con SQL
   
        protected function ejecutaProcedmientos(){}

        protected function ejecutaTransacciones(){}

        protected function informacionDebug($expecion,$modo,$write)
        {
            switch($modo)
            {
                case 1:
                        $log = $expecion->getMessage().PHP_EOL;
                            break;
                case 2:
                        $log = "El archivo : ".$expecion->getFile().PHP_EOL."Tiene el siguiente mensaje de error : ".$expecion->getMessage().
                        " en la linea ".$expecion->getLine().PHP_EOL; 
                            break;
                case 3:
                       $log = $expecion->getTraceAsString().PHP_EOL; 
                            break;
            }
            if($write!=0){$this->writteLog(/*date("Y-m-d H:i:s")." ".*/$log);} //problemas con la zona horaria se debe definir en el php.ini date.timezone
        return $log;    
        }// fin de la funcion 

        private function writteLog($informacion)
        {
          file_put_contents($this->_FILE, $informacion, FILE_APPEND | LOCK_EX);
        }//fin para la escritura de logs
   
   //--inicio de los metodos abstractos heredados de la inteface de claves conexiion
    protected function setPassword($password)
    {
        $this->_PASSWORD = $password;    
    }
    protected function setPuerto($puerto)
    {
        $this->_PUERTO = $puerto;  
    }
    protected function setUsuario($usuario) 
    {
        $this->_USUARIO=$usuario;
    }
    protected function setBaseDatos($basedatos)
    {
        $this->_BD=$basedatos;
    }
    protected function setServidor($servidor)
    {
        $this->_SERVER=$servidor;
    }
    //-- fin de la implementacion metodos abastractos
    
}//fin de la clase conector Mysql

?>