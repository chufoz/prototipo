<?php
include_once '../modelos/conector_mysql.inc.php';
class Entidades_Tareas extends ConexionMysql{

    public function listaActividades($idusuario){
       $tablausuarios="";
       parent::ejecutaConsultas("SELECT a.eid as eid,a.category as category,a.status as status,e.color as status_color,a.priority as priority,f.color as priority_color,a.owner as id_owner,
                                c.FULLNAME as owner, a.assignee as id_assignee,d.FULLNAME as assignee,a.CRMcustomer as cid,b.custname as custname,a.start_date as startdate,a.close_date as closedate,
                                a.duedate as duedate,DATE_FORMAT(a.start_date,'%Y-%m-%d') as creacion FROM CRMentity as a INNER JOIN CRMcustomer as b ON b.id=a.CRMcustomer INNER JOIN CRMloginusers as c ON a.owner=c.id
                                INNER JOIN CRMloginusers as d ON a.assignee=d.id INNER JOIN CRMstatusvars as e ON a.status=e.varname INNER JOIN CRMpriorityvars as f ON a.priority=f.varname WHERE 1
                                AND deleted<>'y' AND owner<>'2147483647' AND assignee<>'2147483647' AND owner = $idusuario ORDER BY a.eid DESC, a.sqldate DESC, a.status ASC, a.priority ASC");
       while ($datos = $this->_QUERY->fetch()):
        $tablausuarios.="<tr><td>".$datos['category']."</td><td>".$datos['custname']."</td><td>".$datos["closedate"]."</td></tr>";
      endwhile;
      return $tablausuarios;
        
   }
 }
   ?>