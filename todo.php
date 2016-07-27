<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LT Trabajadores</title>
	<link href="resources/css/bootstrap.min.css" rel="stylesheet">
	<link href="resources/miestilo.css" rel="stylesheet">
</head>
<body background="http://fondosdepantallaenmovimiento.com/wp-content/uploads/2015/09/fondo-de-pantalla-fondo-azul-1.jpg">

<div class="container">	
	<h1><u>Lista de Trabajadores</u></h1>
	<div class="row">
		<div class="col-sm-12" >
			<button type="button" class="btn btn-primary btn-lg" id="nuevo">Nuevo Trabajador</button>
		</div>
	</div>
	<div id="mensaje"></div>
	<div class="row">
		<div class="col-sm-6">
			<div id="formulario" style="display: none;"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div id="listar" style="display: none;"></div>
		</div>
	</div>
</div>
	<script src="resources/js/jquery.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
</body>
</html>
<script>
	$(document).ready(function(){
		$('#listar').load("list.php").fadeIn('slow');
		$('#nuevo').click(function(){
			$('#formulario').load("add.php").slideDown('slow');
		});
	});
</script>