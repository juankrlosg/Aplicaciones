<form class="" action="<?php echo URL ?>login/guarda" method="post">
  <div class="row">
    <div class="col col-m4">
      <input class="form-control" placeholder="Nombre" type="text" name="nombre" value="">
    </div>
    <div class="col col-m4">
      <input class="form-control" placeholder="Apellido Paterno" type="text" name="ap_p" value="">
    </div>
    <div class="col col-m4">
      <input class="form-control" placeholder="Apellido Materno" type="text" name="ap_m" value="">
    </div>
  </div>

  <br>
  <input class="form-control" placeholder="Edad" type="number" name="edad" value="">
  <br>
  <select class="form-control" name="id_sexo">
    <option value="" selected>Selecciona...</option>
    <option value="1">Femenino</option>
    <option value="2">Masculino</option>
  </select>
  <br>
  <input class="form-control" placeholder="Usuario" type="number" name="id_usuario" value="">
  <br>
  <button type="submit" class="btn btn-lg btn-success btn-block">Guardar</button>
</form>
