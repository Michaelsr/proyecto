<?php  
	mysql_connect('localhost','root','');
	mysql_select_db("grifo");
	$sql=mysql_query("SELECT * FROM trabajador");
?>
<div class="row">
		<div class="col-sm-12">
			<table class="table table-striped table-bordered table-hover">
			<tr>
				<th>Nro.</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>DNI</th>
				<th>Celular</th>
				<th>Direccion</th>
				<th>Puesto de trabajo</th>
				<th>Horario de trabajo</th>
				<th colspan="2">Opciones</th>
			</tr>
		<?php
			$i=0;
			while($rs=mysql_fetch_array($sql)){
		?>
				<tr>
					<td><?php echo ++$i; ?></td>
					<td><?php echo $rs['nombre']; ?></td>
					<td><?php echo $rs['apellidop']; ?></td>
					<td><?php echo $rs['apellidom']; ?></td>
					<td><?php echo $rs['dni']; ?></td>
					<td><?php echo $rs['celular']; ?></td>
					<td><?php echo $rs['direccion']; ?></td>
					<td><?php echo $rs['puesto']; ?></td>
					<td><?php echo $rs['horario']; ?></td>
					<td><a href="#"><span class="glyphicon glyphicon-pencil" onclick="editar(<?php echo $rs['id']; ?>)"></span></a></td>
					<td><a href="#"><span class="glyphicon glyphicon-remove" onclick="eliminar(<?php echo $rs['id']; ?>)"></span></a></td>
				</tr>
				
		<?php } ?>
			</table>
		<p>Total registros encontrados: <?=$i?></p>
		</div>
</div>


<script>
	var eliminar=function(codigo){
		if(confirm("¿se va eliminar el registro?")){
			$.post("crud.php",{id:codigo,opt:"del"},function(data){
		      $('#mensaje').html(data).fadeIn('slow').fadeOut(4000);
		      $('#listar').load("list.php").fadeIn('slow');
		    });
		}
		return false;		
	}

	var editar=function(codigo){
		$('#formulario').load("edit.php",{id:codigo}).slideDown('slow');
	}
	
</script>
