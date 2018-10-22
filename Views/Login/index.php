<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form id="form-signin" class="form-signin" method="post" action="<?php echo URL?>Login/Verify">
        <h1 class="h3 mb-3 font-weight-normal">Por favor, inicia sesión</h1>
        <div class="form-group">
          <label for="usuario" >Usuario</label>
          <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Nickname" required>
        </div>
        <div class="form-group">
          <label for="contraseña" >Contraseña</label>
          <input type="password" id="contraseña" name="contraseña" class="form-control" placeholder="Contraseña" required>
        </div>
        <div class="row">
          <div class="col-md-6">
            <button class="btn btn-lg btn-primary btn-block" id="signin" type="submit">Entrar</button>
          </div>
          <div class="col-md-6">
            <a class="btn btn-lg btn-danger btn-block" id="signin" type="button" href="<?php echo URL ?>login/registrar">Registrar</a>
          </div>
        </div>
      </form>
    </div>
</div>
