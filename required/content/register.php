<div class="containerLogin">
    <form class="formulario" method="POST" action="codigo.php">
        <h1>Iniciar sesion</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-envelope-square icon"></i>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="text" id="apellido" name="apellido" placeholder="Apellido">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="text" id="correo" name="correo" placeholder="Correo">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" id="Contrasena" name="Contrasena" placeholder="Contraseña">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" id="Contrasena2" name="Contrasena2" placeholder="Repetir contraseña">
            </div>
            <input type="submit" value="Iniciar sesion" class="button">
            <p>No tienes una cuenta? <a class="link" href="Registro.html">Registrate</a></p>
        </div>
    </form>
</div>