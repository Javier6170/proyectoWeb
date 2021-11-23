<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Store dark</a>
        <div>
            <button type="button" class="btn btn-outline-light me-2">Login</button>
            <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>index.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_usuario.php"><i class="fas fa-home"></i>Crear usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>usuarios.php"><i class="fas fa-home"></i>Ver Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_rol.php"><i class="fas fa-home"></i>Crear Rol </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>rol.php"><i class="fas fa-home"></i>Ver Rol</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_producto.php"><i class="fas fa-home"></i>Crear Video juegos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>productos.php"><i class="fas fa-home"></i>Ver producto</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_categoria.php"><i class="fas fa-home"></i>Crear categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>categoria.php"><i class="fas fa-home"></i>Ver categoria</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-gamepad"></i> Ver productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fas fa-shopping-cart"></i> Carrito productos</a>
                </li>
            </ul>
        </div>

    </div>
</nav>