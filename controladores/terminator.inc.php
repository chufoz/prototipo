<?php
require_once('../modelos/conector_mysql.inc.php');
class T800 extends ConexionMysql
{
    //variables que sirven para el envio de la información
    protected $_PASSWORD=null;
    protected $_USUARIO=null;
/********************************************************/
    public function __destruct() {
        $this->terminarConexion();
    }//desconectar la base de datos
    
        protected function verificarAcceso() 
        {
            parent::ejecutaConsultas("SELECT name as user, password as pass, 1 auth, active as candado, id as id FROM CRMloginusers WHERE name ='$this->_USUARIO'"); 
            $identificacion = $this->_QUERY->fetch();//obtenemos el arreglo de las identificaciones
                if ($identificacion)
                { //existe un registro
                    if($identificacion['candado']!='no')
                      {//verificar si el usuario esta deshabilitado 
                         $acceso = (strcmp($identificacion['pass'],$this->seguridadPassword($this->_PASSWORD,null,5))==0) ? 1 : "2#<strong>Precaución ! </strong>El password que ha proporcionado es incorrecto"; /*si es 1 si es el password si es 0  no es password*/                       }
                      else
                          {
                          $acceso="3#<strong>Alerta !</strong>El usuario esta deshabilitado por el sistema";
                          }          
                }// en caso que no exista el registro
                else
                    {
                    $acceso = "4#<strong>Error ! </strong>El usuario no esta registrado en el sistema";
                    }  
            return $acceso;
        } // funcion que valida los datos del usuario para que pueda acceder ala aplicación

     public function seguridadPassword($password,$datetime,$type)
        {
         switch ($type)
         {
            case 1: 
                    $encryp = crypt($password,$this->giveHash($datetime));
                    break;
            case 2: 
                    $encryp = md5($password);
                    break;
            case 3:
                   $encryp=$this->encrypt($password,$datetime);
                    break;
            case 4:
                    $encryp=$this->decrypt($password,$datetime);
                    break;
            case 5:
                    $encryp = $this->mysqlPassword($password);
                    break;

         }
         return $encryp;
        }//fin de la funcion encriptaPassword


        public function giveHash($datetime)
        { //funcion que nos permitira obtener el hash apartir del dia que se dio de alta
                $semilla = 33;//este numero es para que se puedan visualizar un caracter y no arroje datos erroneos
                list($fecha,$tiempo) = explode(" ", $datetime);
                list($año,$mes,$dia) = explode("-",$fecha);
                $sf= (int)(($año/($dia+$mes)));//evitamos que existan numeros decimales
                list($hora,$minutos,$segundos) = explode(":",$tiempo);
                $st=(($hora-$segundos)+($minutos+$semilla));
        return $hash = chr($st).chr($sf);//genera la semilla convirtiendolo en un asccii
    }//fin de la funcion giveHash
    
        private function recordarPassword($cookie)
        {
            list($machine,$usuario,$password) = explode("%",$cookie);
                if(strcmp(gethostbyaddr($_SERVER['REMOTE_ADDR']),$machine)==0)
                  {//verificar si son la misma maquina
                     $centinela = $password;                     
                  }//listos para ser puestos en la interface
                else
                    {
                    $centinela=29;
                    }/*posiblesuplantaciondeidentidad*/
            return $centinela;
        }//-----> fin del autologin version beta
    
        protected function existeCookie($usuario,$cookie,$password)
        {
            $this->_USUARIO= $usuario;//se iniciliza las variables globales
            $identificacion = parent::getClavesSeguridad("SELECT cookie_identificacion as cookie, fecha_identificacion  as fecha from jc_identificaciones where usuario_identificacion = '$usuario'");
                if($identificacion['cookie']==1)
                {
                    $this->_PASSWORD = $this->recordarPassword($cookie);//el password lo saca de la cookie
                }//verificar si tiene una cookie
                else
                    { 
                        $this->_PASSWORD=$this->seguridadPassword($password,$identificacion['fecha']);/*saca el password de un hast cryp*/                       
                    }
    }//fin de la funcion cookies version beta
    
        
        protected function administracionCookies($usuario,$password,$checkbox)
        {
            if($checkbox==1)
            {
                $cookie = gethostbyaddr($_SERVER['REMOTE_ADDR'])."%".$usuario.'%'.$password.'%'.md5(uniqid(rand(), true));//creaelidunicoparalacookie
                setcookie('automatico',$cookie, time()+604800,'/');
                parent::ejecutaConsulta($consulta);
            } /*creaunacookieentucomputador*/
            else
                {
                unset($_COOKIE['automatico']);
                }
        }//findecrearcookies version beta
     
    
        protected function setsessionGlobals($usuario)
        {
            $sesiones= array();//crea las sesiones
            parent::ejecutaConsultas("SELECT id as clave, name as user , FULLNAME as hash FROM crmdb.CRMloginusers where name ='$usuario';");
            $datos = $this->_QUERY->fetch();
            $sesiones['clave']=$datos['clave'];//el pk para todo el sistema
            $sesiones['user']=$datos['user'];//el user para todo el sistema
            $sesiones['hash']=$datos['hash'];//el hash para todo el sistema
            return $sesiones;
        }//fin de genera sesiones

        private function encrypt($input,$Key)
        {
            $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($Key), $input, MCRYPT_MODE_CBC, md5(md5($Key))));
            return $output;
        }
        private function decrypt($input,$Key)
        {
            $output = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($Key), base64_decode($input), MCRYPT_MODE_CBC, md5(md5($Key))), "\0");
            return $output;
        }
        private function mysqlPassword($password,$type="OLD_PASSWORD")//existe PASSWORD y OLDPASSWORD por dafaul elejimos la segunda
        {
         parent::ejecutaConsultas("SELECT $type('$password') as passcrm");
         $clave = $this->_QUERY->fetch();
         return $clave['passcrm'];  
        }

}//fin de la clase
