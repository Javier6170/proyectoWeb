<header class="header content">
    <div class="header-video">
        <video src="https://redragon.es/content/uploads/2021/05/210414-Redragon-Web-1920-x-740.mp4" class="video" autoplay muted loop></video>
    </div>
    <div class="header-content">
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
</header>
