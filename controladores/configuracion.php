   <?php
/*
 * Este archivo contienen todas las configuraciones principales para el caso que quiera configurar 
 * el sistema, estas constantes pueden afectar la funcionalidad del sistema por  lo que es conveniente que se use con cuidado.
 * by jgarcia@ictc.com.mx
 */
class Config_Ini 
{
    //==================Configuraciones de valores por default======================================
    const _COFIG= "../controladores/configuracion.php";//precaucion al modificar este parametro
    const _PATH= "../utilerias";//ruta predifinada para los css . js . imgs , sonidos etc
    const _SALIDA="salidasistema.php";//pagina que sale desde del sistema
    const _UPLOADIMG="../utilerias/img/";//subida de imagenes
    private static $_SINACCESO="notautorizacion.html";//pagina default para usuarios que ingresan al sistema sin privilegios
    private static $_SINPRIVLEGIO="notprivilegie.html";//pagina default para usuarios que ingresan al sistema sin privilegios
    private static $_DEBUG = 1; //utilizacion para la visualizacion de errores basededatos
    private static $_LOG = "logPrograma.log"; //archivo que llevara un reporte para los logs basededatos 
    private static $_WRITTE="0";// esta variable si se tiene con el valor 0 cero no escribira el log para que pueda escribir en un log debe estar en 1 basedatos
    private static $_MODO=1;//esta variable te da un filtrado de informacion en cuestion del debug 1 arroja el valor por default 2 valor con linea de erores 3 error global basedatos
      
//=================Configuracion para accesos de roles=============================================================================
    private static $modulos = array(
                                   /*root*/  array('adminperfil.php'=>'Editar Perfil','adminusers.php'=>'Administraci贸n Usuarios','adminwebdial.php'=>'Configuracion Webdial','editor.php'=>'Config_ini'),
                                   /*sysadmin*/  array('adminperfil.php'=>'Editar Perfil','adminusers.php'=>'Administraci贸n Usuarios','adminwebdial.php'=>'Configuracion Webdial'),
                                   /*admin*/  array('adminperfil.php'=>'Editar Perfil')
                                  );//se agregan los modulos en el perfil que quieres que se visualizen
  
  
///================Si no tiene conocimiento previo sobre estas estrucuras no modificar ya que podria desestabilizar el sistema ===========================
    
    public function getDebug(){
        return self::$_DEBUG;
    }
    public function getFilelog(){
       return self::$_LOG; 
    }
      public function getWritelog(){
        return self::$_WRITTE;
    }
    public function getMododebug(){
       return self::$_MODO; 
    }
    public function getsinAcceso(){
        return self::$_SINACCESO;
    }
    public function getsinPrivilegio(){
       return self::$_SINPRIVLEGIO; 
    }
      
    public static function getModulos($privilegio,$modulo) 
    {
        ini_set('display_errors', '0');  
        error_reporting(E_ALL | E_STRICT);
            switch ($privilegio)
            {
                case 'root':
                     self::setModulos(self::$modulos[0],$modulo);
                    break;
                case 'sysadmin':
                    self::setModulos(self::$modulos[1],$modulo);
                    break;
                case 'admin':
                    self::setModulos(self::$modulos[2],$modulo);
                break;
            }//fin del switch
    }//getmodulos
  
    private function setModulos($modulos,$active)
    {
        foreach ($modulos as $modulo=>$item)
           {
            if(strcmp($item, $active)==0)
              {
                print_r("<li class='active'><a href='$modulo'>$item</a></li>");
              }
            else 
                {
                print_r("<li><a href='$modulo'>$item</a></li>");
                }
            }//fin del forech
    }//fin del setmodulos
  
}
  
?>