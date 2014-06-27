<?php
require_once '../controladores/controlador_entidad.php';
require_once '../controladores/seguridad.class.php';
$controlador = new controladorentidad(); 
$terminator = new AccesoSistema();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pruebas BD</title>
	<link rel="shortcut icon" href="../logo.ico" type="image/x-icon" />
	<link href="../utilerias/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="../utilerias/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
<section class="col-md-12">
	<table class="table table-hover table-bordered table-responsive">
  		<thead class="bg-primary">
			<tr>
      			<th class="text-center">NOMBRE</th>
    		</tr>
		</thead>
  		<tbody> 
  			<?php echo $controlador->pruebaconsulta();?>
		</tbody>

	</table>
</section>	
</body>
</html>