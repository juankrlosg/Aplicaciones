<div class="container">
  <?php
  if(mysqli_num_rows($datos)>0){
  ?>
  <h3>Aplicaciones Web 702</h3>
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre del alumno</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($fila=mysqli_fetch_assoc($datos)) { ?>
        <tr>
          <td scope="col"><?php echo $fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre'] ?></td>
          <td scope="col"></td>
          <td scope="col"></td>
          <th scope="col"><button class="btn btn-success editar" id="<?php echo $fila['id_usuario'] ?>">Editar</button> </th>
          <th scope="col"><a class="" href="<?php echo URL ?>Calificaciones/eliminar/<?php echo $fila['id_usuario'] ?>">Eliminar</button> </th>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php
  } else { ?>
    <h2>No se encuentra ningun dato</h2>
  <?php } ?>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editando</h4>
        <button type="button" class="close"
              data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form-signin" action="" method="post" id="actualizacion">
          <input type="text" hidden name="id" id="id" value="">
          <div class="form-group">
            <input type="text" class="form-control"
              id="nombre" name="nombre"></input>
            <label for="nombre">Nombre</label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"
              id="ap_p" name="ap_p"></input>
            <label for="ap_p">Apellido Paterno</label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"
              id="ap_m" name="ap_m"></input>
              <label for="ap_m">Apellido Materno</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success actualiza"
          data-dismiss="modal">Actualizar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $(".editar").click(function(){
      var id=$(this).attr('id');
      $.post("<?php echo URL ?>Calificaciones/get/"+id,{},function(data){
        if(data){
          data=JSON.parse(data)
          $("#id").val(data['id_usuario'])
          $("#nombre").val(data['nombre'])
          $("#ap_p").val(data['ap_p'])
          $("#ap_m").val(data['ap_m'])
          $("#myModal").modal('show');
        }
      })
    })
    $(".actualiza").click(function(){
      var arreglo=$("#actualizacion").serializeArray();
      $.post("<?php echo URL ?>Calificaciones/edit/",{arreglo:arreglo},function(data){
        window.location.href="<?php echo URL ?>Calificaciones/ver";
      })
    })
  })
</script>
