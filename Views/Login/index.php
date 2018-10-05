<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form id="form-signin" class="form-signin" method="post"
              action="<?php echo URL?>Login/Verify">
        <h1 class="h3 mb-3 font-weight-normal">Por favor, inicia sesión</h1>
        <label for="usuario" class="sr-only">Usuario</label>
        <input type="text" id="usuario" name="usuario" class="form-control"
              placeholder="Nickname" required autofocus>
        <label for="contraseña" class="sr-only">Contraseña</label>
        <input type="password" id="contraseña" name="contraseña"
              class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-primary btn-block" id="signin"
              type="submit">Entrar</button>
      </form>
    </div>
</div>
</body>
