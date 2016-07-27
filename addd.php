
<h2>Agregar nuevo trabajador</h2>
<div class="panel panel-default" id="dio">
  <div class="panel-body">
  <form role="form" action="crud.php" method="post" id="frm">
    <div class="form-group">
      <label>id Cliente</label>
      <input type="text" class="form-control" placeholder="Introduce tu Nombre" name="id_cliente" required>
    </div>
    <div class="form-group">
      <label>Nombres</label>
      <input type="text" class="form-control" placeholder="Introduce tu Apellido Paterno" name="nombre" required>
    </div>
    <div class="form-group">
      <label>Número de DNI</label>
      <input type="number" class="form-control" placeholder="Introduce tu DNI" name="dni">
    </div>
    <div class="form-group">
      <label>ruc</label>
      <input type="text" class="form-control" placeholder="Introduce tu Dirección" name="ruc">
    </div>
    <div class="form-group">
      <label>total</label>
      <input type="number" class="form-control" placeholder="Introduce tu DNI" name="total">
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
      $.post("crudd.php", $("#frm").serialize(),function(data){
        $('#mensaje').html(data).fadeIn('slow').fadeOut(4000);
        $('#formulario').toggle( "explode");
        $('#listar').load("lista.php").fadeIn('slow');
      });
  });
</script>





