
<h2 id="h2">Agregar nuevo trabajador</h2>
<div class="panel panel-default" id="dii">
  <div class="panel-body">
  <form role="form" action="crud.php" method="post" id="frm">
    <div class="form-group">
      <label>Nombres</label>
      <input type="text" class="form-control" placeholder="Introduce tu Nombre" name="nombre" required>
    </div>
    <div class="form-group">
      <label>Apellido Paterno</label>
      <input type="text" class="form-control" placeholder="Introduce tu Apellido Paterno" name="apellidop" required>
    </div>
    <div class="form-group">
      <label>Apellido Materno</label>
      <input type="text" class="form-control" placeholder="Introduce tu Apellido Materno" name="apellidom" required>
    </div>

    <div class="form-group">
      <label>Número de DNI</label>
      <input type="number" class="form-control" placeholder="Introduce tu DNI" name="dni">
    </div>
    <div class="form-group">
      <label>Número de Celular</label>
      <input type="number" class="form-control" placeholder="Introduce tu Celular" name="celular">
    </div>
    <div class="form-group">
      <label>Dirección</label>
      <input type="text" class="form-control" placeholder="Introduce tu Dirección" name="direccion">
    </div>
    <div class="form-group">
      <label>puesto</label>
      <select class="form-control" name="puesto">
        <option>huachiman 1</option>
        <option>vendedor 1</option>
        <option>vendedor 2</option>
        <option>huachiman 2</option>
        <option>administrador</option>

      </select>
    </div>
    <div class="form-group">
      <label>horario de trabajo</label>
      <select class="form-control" name="horario">
        <option>1:00am A 6:00am</option>
        <option>6:00am A 11:00am</option>
        <option>11:00am A 4:00pm</option>
        <option>8:00pm A 1:00am</option>  
      </select>
    </div>
    <input type="hidden" name="opt" value="add">
    <button type="button" class="btn btn-success" id="guardar">Guardar tabla de cliente</button>
    <button type="button" class="btn btn-default" id="cerrar">Cerrar</button>
</form>
  </div>
</div>

<script>

   $('#cerrar').click(function(){
    $('#formulario').toggle( "explode");
  });

  $('#guardar').click(function(){
      $.post("crud.php", $("#frm").serialize(),function(data){
        $('#mensaje').html(data).fadeIn('slow').fadeOut(4000);
        $('#formulario').toggle( "explode");
        $('#listar').load("list.php").fadeIn('slow');
      });
  });
</script>





