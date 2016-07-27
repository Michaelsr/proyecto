<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>facturas</title>
	<link href="resources/css/bootstrap.min.css" rel="stylesheet">
	<link href="resources/miestilo.css" rel="stylesheet">
</head>
<body background="http://2.bp.blogspot.com/-cFVxsHASQNI/TrxJlBgWJnI/AAAAAAAAAVE/Kk9n6bcENyc/s1600/fondo+azul.jpg">

<div class="container">	
	<h1><u>Lista de facturas</u></h1>
	<div class="row">
		<div class="col-sm-12" >
			<button type="button" class="btn btn-primary btn-lg" id="nuevo">Nuevo factura</button>
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
		$('#listar').load("Lista.php").fadeIn('slow');
		$('#nuevo').click(function(){
			$('#formulario').load("addd.php").slideDown('slow');
		});
	});
</script>