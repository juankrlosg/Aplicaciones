<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <form id="regusr" class="form-signin" action="<?php echo URL ?>login/guardar" method="post">
      <br>
      <h1 class="h3 mb-3 font-weight-normal">Registrate</h1>
      <div class="row">
        <div class="col-md-4 form-group">
          <label for="nombre" class="left">Nombre</label>
          <input class="form-control" type="text" name="nombre" id="nombre" value="" placeholder="Nombre" required>
        </div>
        <div class="col-md-4 form-group">
          <label for="ap_p">Apellido Paterno</label>
          <input class="form-control" type="text" name="ap_p" id="ap_p" value="" placeholder="Apellido Paterno" required>
        </div>
        <div class="col-md-4 form-group">
          <label for="ap_m">Apellido Materno</label>
          <input class="form-control" type="text" name="ap_m" id="ap_m" value="" placeholder="Apellido Materno" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="edad">Edad</label>
          <input class="form-control" type="number" name="edad" value="">
        </div>
        <div class="col-md-6 form-group">
          <label for="id_sexo">Sexo</label>
          <select class="form-control" name="id_sexo">
            <option value="">Selecciona...</option>
            <?php
            if(isset($datos[0])){
              while($fila = mysqli_fetch_assoc($datos[0])){ ?>
                <option value="<?php echo $fila['id_sexo'] ?>"><?php echo $fila['descripcion'] ?></option>
              <?php }
            }
            ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="nickname">Nickname</label>
          <input class="form-control" type="text" name="nickname" value="">
        </div>
        <div class="col-md-6 form-group">
          <label for="contraseña">Contraseña</label>
          <input class="form-control" type="password" name="contraseña" value="">
        </div>
      </div>
      <div class="form-group">
        <label for="id_tipo_usuario">Tipo de Usuario</label>
        <select class="form-control" name="id_tipo_usuario">
          <option value="">Selecciona...</option>
          <?php
          if(isset($datos[1])){
            while($fila = mysqli_fetch_assoc($datos[1])){ ?>
              <option value="<?php echo $fila['id_tipo_usuario'] ?>"><?php echo $fila['descripcion'] ?></option>
            <?php }
          }
          ?>
        </select>
      </div>
      <br>
      <button type="submit" class="btn btn-lg btn-success btn-block">Guardar</button>
    </form>
  </div>
</div>
<script type="text/javascript">
  $("#regusr").validate({
    errorPlacement: function(error, element) {
			// Append error within linked label
			$( element )
				.closest( "form" )
					.find( "label[for='" + element.attr( "id" ) + "']" )
						.after( error );
		},
    errorElement: "h1",
		messages: {
			nombre: {
				required: "Escribe un nickname valido"
			},
			ap_p: {
				required: "Escribe un apellido valido"
			},
      ap_m: {
        required: " Campo requerido"
      }
		}
  });
</script>
