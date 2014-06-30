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
        <li class="active"><a href="#1" data-toggle="tab">Principal</a></li>
        <li><a href="#2" data-toggle="tab">Clave de Acceso</a></li>
        <li><a href="#3" data-toggle="tab">Reportes</a></li>
        <li><a href="#4" data-toggle="tab">Plantillas</a></li>
        <li><a href="#5" data-toggle="tab">Dashboard</a></li>
        <li><a href="#6" data-toggle="tab">Añadir</a></li>
        <li><a href="#7" data-toggle="tab">Actividades</a></li>
        <li><a href="#8" data-toggle="tab">Clientes</a></li>
        <li><a href="#9" data-toggle="tab">CSV</a></li>
        <li><a href="#10" data-toggle="tab">TEL</a></li>
        <li><a href="#11" data-toggle="tab">Resumen</a></li>
        <li><a href="#12" data-toggle="tab">Salir</a></li>
    </ul>
    </section>
    <section class="col-md-10">
<div class="tab-content">
	<div class="tab-pane active" id="1">
		<h3>Esta es la vista Principal</h3>
	</div>
	<div class="tab-pane" id="2">
		<h3>Esta es la vista Clave de Acceso</h3>
	</div>
	<div class="tab-pane" id="3">
		<h3>Esta es la vista Reportes</h3>
	</div>
	<div class="tab-pane" id="4">
		<h3>Esta es la vista Plantillas</h3>
	</div>
	<div class="tab-pane" id="5">
		<h3>Esta es la vista Dashboard</h3>
	</div>
    
<div class="tab-pane" id="6">
	<section class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h3>Añadir</h3>
  <section class="col-sm-4">
	<article class="form-group" id="art1">
                        <label id="prot3">Empresa</label>
                        <input class="form-control" id="prot3" type="text" autocomplete="on" placeholder="Ingresa una Empresa" requiered>
                        <label id="prot3">Asunto</label>
                        <textarea class="form-control" id="asunto" name="asunto" placeholder="Agregar Asunto..."></textarea>
                    </article>
                    <article class="text-center">
                	   <article class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle btn-sm ancho" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>  Propietario</button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Nombre 1</a></li>
                                    <li><a href="#">Nombre 2</a></li>
                                    <li><a href="#">Nombre 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Nombre 4</a></li>
                                </ul>
                        </article>
                        <article class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle btn-sm ancho" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Asignado       </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Nombre 1</a></li>
                                    <li><a href="#">Nombre 2</a></li>
                                    <li><a href="#">Nombre 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Nombre 4</a></li>
                                </ul>
                        </article>
                    </article>
                    <article class="form-group" id="art1">
                        <label id="prot3">Etiqueta</label>
                        <input class="hashtag form-control" id="prot3-1" type="text" placeholder="#Hashtag" requiered>
                    </article>
                    <article id="hashtag" class="text-center form-group">
                    </article>
                    <article id="clickme form-group">
                        <h4 id="presioname" class="text-left form-control btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Opciones Avanzadas... </h4>
                            <article id="art2pr4" class="toggle table-responsive" style="display: none;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td id="tbl" colspan="3">
                                                <input type="file" class="filestyle" data-input="false">
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="font-size: 11px;">
                                            <td><input type="checkbox" name="check" value="borrar">Delated Entity</td>
                                            <td><input type="checkbox" name="check" value="leer">Read-Only to Other Users</td>
                                            <td><input type="checkbox" name="check" value="privado">Private</td>
                                        </tr>
                                        <tr style="font-size: 11px;">
                                            <td><input type="radio" name="radio" value="alta">Alta</td>
                                            <td><input type="radio" name="radio" value="media">Media</td>
                                            <td><input type="radio" name="radio" value="ninguna">Ninguna</td>
                                        </tr>
                                    </tbody>
                                </table>  
                            </article>   
                    </article>
                    <article id="art2pr3" class="form-group">
                        <button class="btn btn-primary form-control" id="guardar" name="guardar" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar en Base de Datos</button>
                    </article>

  </section>
  <section class="col-sm-4">
  	<form action="" class="form-group" role="form">
                    <section class="form-group">
                        <label>Calendarizar</label>
                            <article class="input-group date Wcalendar" data-date-format="yyyy-mm-dd H:ii:ss P">
                                <input id="cal1" class="form-control" size="16" type="text" value="" readonly>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </article>
                    </section>
                </form>
  				 <article id="descri" class="form-group">
                    <label><h4>Descripción</h4></label>
                    <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Descripción..."></textarea>
                </article>
                <form action="" class="form-group" role="form">
                    <section class="form-group">
                        <label>Recordarme</label>
                            <article class="input-group date Wcalendar" data-date-format="yyyy-mm-dd H:ii:ss P">
                                <input id="cal1" class="form-control" size="16" type="text" value="" readonly>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </article>
                    </section>
                </form>
  </section>
  <section class="col-sm-4">
  	<article class="form-group text-center table-responsive">
  					<label><h4>Lista de Actividades</h4></label>
                <table id="tabla" class="table text-left table-hover">
                    <thead>
                        <tr>
                            <th id="tbl">Actividades</th>
                            <th id="tbl">Empesa</th>
                            <th id="tbl">Finalizacion</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       echo $entidad->listaActividades($_SESSION['globales']['clave'])
                       ?>
                    </tbody>
                </table>
  				</article>
  </section>
        </div>
        </div>
        </section>
    </div>
<div class="tab-pane" id="7">
<section class="container-fluid">
    <section class="row">
        <section class="col-md-12">
            <h3>Filtro de Actividades</h3>
            <section class="col-md-4">
                <article class="form-group">
                    <label>Cliente</label>
                    <input class="form-control" placeholder="Cliente" autocomplete="on">
                </article>
                <article class="text-center">
                <article class="btn-group form-group">
                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm ancho" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>  Creador</button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Creador 1</a></li>
                            <li><a href="#">Creador 2</a></li>
                            <li><a href="#">Creador 3</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Creador 4</a></li>
                        </ul>
                </article>
                <article class="btn-group form-group">
                    <button type="button" class="btn btn-default dropdown-toggle btn-sm ancho" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Responsable</button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Creador 1</a></li>
                            <li><a href="#">Creador 2</a></li>
                            <li><a href="#">Creador 3</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Creador 4</a></li>
                        </ul>
                </article>
                </article>
                <article class="form-group">
                    <label id="prot3">Estado</label>
                    <input class="hashtag form-control" id="prot3-1" type="text" placeholder="#Hashtag" requiered>
                </article>
                <article id="hashtag" class="text-center form-group">
                </article>
                <article class="form-group">
                    <label id="prot3">Prioridad</label>
                    <input class="hashtag form-control" id="prot3-1" type="text" placeholder="#Hashtag" requiered>
                </article>
                <article id="hashtag" class="text-center form-group">
                </article>
                <article class="form-group">
                    <label>Categoria</label>
                    <input class="form-control" placeholder="Categoria" autocomplete="on">
                </article>
            </section>
            <section class="col-md-4">
                <h4>Fecha</h4>
                <form action="" class="form-group" role="form">
                    <section class="form-group">
                        <label>Desde</label>
                            <article class="input-group date Wcalendar" data-date-format="yyyy-mm-dd H:ii:ss P">
                                <input id="cal1" class="form-control" size="16" type="text" value="" readonly>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </article>
                    </section>
                </form>
                <form action="" class="form-group" role="form">
                    <section class="form-group">
                        <label>Hasta</label>
                            <article class="input-group date Wcalendar" data-date-format="yyyy-mm-dd H:ii:ss P">
                                <input id="cal1" class="form-control" size="16" type="text" value="" readonly>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </article>
                    </section>
                </form>
                <article class="text-center">
                <article class="btn-group form-group" style="align:center;">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Inicio <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Fin</a></li>
                        </ul>
                </article>
                <article class="form-group">
                    <label for="vencimiento">Vencimiento </label>
                    <input type="checkbox" name="option1" value="Si/No"> Si/No<br>
                </article>
                </article>
            </section>
            <section class="col-md-4">
                <div class="form-group">
                    <a href="#"><span class="glyphicon glyphicon glyphicon-link"></span> Supervisar Tareas Administrativas</a>
                </div>
                <div class="form-group">
                    <a href="#"><span class="glyphicon glyphicon glyphicon-link"></span> Supervisar Tareas Operativas</a>
                </div>
                <div class="form-group">
                    <a href="#"><span class="glyphicon glyphicon glyphicon-link"></span> Supervisar Tareas Abiertas</a>
                </div>
                <div class="form-group">
                    <a href="#"><span class="glyphicon glyphicon glyphicon-link"></span> Mis Actividades</a>
                </div>
                <form class="form-group text-center">
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-filter"></span>Filtrar</button>
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span>Limpiar</button>
                </form>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control buscar" placeholder="Search">
                    </div>
                    <button class="btn btn-primary btn-buscar"><span class="glyphicon glyphicon-search"></span>Buscar</button>
                 </form>
            </section>
        </section>
        <section class="col-md-12">
            <article class="form-group table-responsive text-center">
                <table id="tabla" class="table text-left table-hover">
                    <thead>
                        <tr>
                            <th id="tbl">ID</th>
                            <th id="tbl">Cliente</th>
                            <th id="tbl">Creador</th>
                            <th id="tbl">Responsable</th>
                            <th id="tbl">Estado</th>
                            <th id="tbl">Prioridad</th>
                            <th id="tbl">Categoria</th>
                            <th id="tbl">Creacion</th>
                            <th id="tbl">Vencimiento</th>
                            <th id="tbl">Edad/Duracion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="tbl">contenido1</td>
                            <td id="tbl">contenido1</td>
                            <td id="tbl">contenido1</td>
                            <td id="tbl">contenido1</td>
                            <td id="tbl">contenido1</td>
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
                            <td id="tbl">contenido2</td>
                            <td id="tbl">contenido2</td>
                            <td id="tbl">contenido2</td>
                            <td id="tbl">contenido2</td>
                            <td id="tbl">contenido2</td>
                        </tr>
                    </tbody>
                </table>
            </article>
        </section>
    </section>
</section>
</div>
<div class="tab-pane" id="8">
		<h3>Esta es la vista de Clientes</h3>
	</div>
	<div class="tab-pane" id="9">
		<h3>Esta es la vista CSV</h3>
	</div>
	<div class="tab-pane" id="10">
		<h3>Esta es la vista de busqueda de TEL</h3>
	</div>
	<div class="tab-pane" id="11">
		<h3>Esta es la vista de Resumen</h3>
	</div>
	<div class="tab-pane" id="12">
		<h3>Salir del CRM</h3>
	</div>
</div>
</section>
</div>
</section>
</section>
</body>
</html>
