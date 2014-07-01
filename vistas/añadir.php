<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anadir</title>
    <link rel="stylesheet" href="">
</head>
<body>
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
</body>
</html>

