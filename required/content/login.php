<div class="containerLogin">
    <div class="embed-responsive embed-responsive-21by9">
        <video src="<?php $BASE_ROOT_FOLDER ?>media/video.mp4"></video>
    </div>
    <form class="formulario" method="POST" action="codigo.php">
        <h1>Iniciar sesion</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-envelope-square icon"></i>
                <input type="text" placeholder="Correo">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña">
            </div>
            <input type="submit" value="Iniciar sesion" class="button">
            <p>No tienes una cuenta? <a class="link" href="<?php echo $BASE_ROOT_URL; ?>registro.php">Registrate</a></p>
        </div>
    </form>
</div>