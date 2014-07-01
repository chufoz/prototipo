<?php
session_start();
var_dump($_SESSION);
include_once '../controladores/controlador_entidad.php';
$entidad = new Entidades_Tareas()
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROTOTIPO3.v3</title>
	<link rel="shortcut icon" href="../logo.ico" type="image/x-icon" />
	<link href="../utilerias/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../utilerias/css/prototipo3v2.css" rel="stylesheet" media="screen">
	<link href="../utilerias/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../utilerias/css/datetimepicker.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="../utilerias/lib/jquery.js"></script>
    <script type="text/javascript" src="../utilerias/lib/bootstrap.js"></script>
    <script type="text/javascript" src="../utilerias/lib/datetimepicker.js"></script>
    <script type="text/javascript" src="../utilerias/lib/bootstrap-filestyle.js"></script>
    <script src="../utilerias/js/widgetcalendario.js" type="text/javascript"></script>
    <script src="../utilerias/js/bootstrap-collapse.js" type="text/javascript"></script>
    <script type="text/javascript" src="../utilerias/fonts/"></script>
    <script src="../utilerias/js/gearhastag.js" type="text/javascript"></script>
</head>
<body>
<section class="container">
	<section class="col-md-12" id="todo">
		<section class="col-md-2 text-left">
	<div class="tabbable">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#1" data-toggle="tab"><span class="glyphicon glyphicon-home"></span> Principal</a></li>
        <li><a href="clave_acceso.php" data-toggle="tab"><span class="glyphicon glyphicon-qrcode"></span> Clave de Acceso</a></li>
        <li><a href="reportes.php" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span> Reportes</a></li>
        <li><a href="#4" data-toggle="tab"><span class="glyphicon glyphicon-file"></span> Plantillas</a></li>
        <li><a href="#5" data-toggle="tab"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
        <li><a href="#6" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span> Añadir</a></li>
        <li><a href="#7" data-toggle="tab"><span class="glyphicon glyphicon-list"></span> Actividades</a></li>
        <li><a href="#8" data-toggle="tab"><span class="glyphicon glyphicon-user"></span> Clientes</a></li>
        <li><a href="#9" data-toggle="tab"><span class="glyphicon glyphicon-export"></span> CSV</a></li>
        <li><a href="#10" data-toggle="tab"><span class="glyphicon glyphicon-phone"></span> TEL</a></li>
        <li><a href="#11" data-toggle="tab"><span class="glyphicon glyphicon-unchecked"></span> Resumen</a></li>
        <li><a href="#12" data-toggle="tab"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
    </ul>
    </section>
    <section class="col-md-10">
<div class="tab-content">
	<div class="tab-pane active" id="1">
        <section class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
		            <article class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td id="tbl" colspan="5" class="text-center">Actividades</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="tbl">contenido1</td>
                                    <td id="tbl">contenido1</td>
                                    <td id="tbl">contenido1</td>
                                    <td id="tbl">contenido1</td>
                                    <td id="tbl">contenido1</td>
                                </tr>
                                <tr>
                                    <td id="tbl">contenido2</td>
                                    <td id="tbl">contenido2</td>
                                    <td id="tbl">contenido2</td>
                                    <td id="tbl">contenido2</td>
                                    <td id="tbl">contenido2</td>
                                </tr>
                                <tr>
                                    <td id="tbl">contenido3</td>
                                    <td id="tbl">contenido3</td>
                                    <td id="tbl">contenido3</td>
                                    <td id="tbl">contenido3</td>
                                    <td id="tbl">contenido3</td>
                                </tr>
                                <tr>
                                    <td id="tbl">contenido4</td>
                                    <td id="tbl">contenido4</td>
                                    <td id="tbl">contenido4</td>
                                    <td id="tbl">contenido4</td>
                                    <td id="tbl">contenido4</td>
                                </tr>
                                <tr>
                                    <td id="tbl">contenido5</td>
                                    <td id="tbl">contenido5</td>
                                    <td id="tbl">contenido5</td>
                                    <td id="tbl">contenido5</td>
                                    <td id="tbl">contenido5</td>
                                </tr>
                            </tbody>
                        </table>  
                    </article>
                    <article class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td id="tbl" colspan="3" class="text-center">Calendario</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="tbl">calendario1</td>
                                    <td id="tbl">calendario2</td>
                                    <td id="tbl">calendario3</td>
                                </tr>
                                <tr>
                                    <td id="tbl">calendario1</td>
                                    <td id="tbl">calendario2</td>
                                    <td id="tbl">calendario3</td>
                                </tr>
                                <tr>
                                    <td id="tbl">calendario1</td>
                                    <td id="tbl">calendario2</td>
                                    <td id="tbl">calendario3</td>
                                </tr>
                            </tbody>
                        </table>  
                    </article>
                    <article class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td id="tbl" colspan="3" class="text-center">Administración</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="tbl">contenido1</td>
                                    <td id="tbl">contenido2</td>
                                </tr>
                                <tr>
                                    <td id="tbl">contenido1</td>
                                    <td id="tbl">contenido2</td>
                                </tr>
                                <tr>
                                    <td id="tbl">contenido1</td>
                                    <td id="tbl">contenido2</td>
                                </tr>
                            </tbody>
                        </table>  
                    </article>      
                </div>
            </div>
	    </section>
    </div>
</div>
</section>
</div>
</section>
</section>
</body>
</html>
