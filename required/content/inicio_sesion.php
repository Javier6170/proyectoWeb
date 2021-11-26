<center>
  <div class="container-user" >
    <div class="register-title">
      <h3>Iniciar Sesión</h3>
    </div>
    <div class="form-register">
      <form method="post" onsubmit="return validar_contraseñas()" action="login.php">
        <div class="mb-3">
          <label for="correo" class="form-label">Correo</label>
          <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo electronico" required>
        </div>
        <div class="mb-3">
          <label for="contrasena" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña" required>
        </div>
        <button type="submit" class="btn btn-danger">Inicio Sesión</button>
      </form>
    </div>
  </div>
  <center>