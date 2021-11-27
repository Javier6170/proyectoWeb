<header class="sup">
	<div class="container">
		<div class="btn-menu">

		</div>
		<?php if (isset($_SESSION) && isset($_SESSION['correo'])) {
		?>
			<div class="logo">
				<label for="btn-menu">☰</label>
			</div>
		<?php } ?>
		<nav class="menu">
			<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>index.php">Store Dark</a>
			<a class="nav-link active" aria-current="page" href="index.php#ventas">Productos</a>
			<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>comunidad.php">Comunidad</a>
			<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>centro_ayuda.php">Centro Ayuda</a>
			<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>quienes_somos.php">Quienes Somos</a>
			<?php
			if (isset($_SESSION) && isset($_SESSION['correo'])) {
			?>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>inicio_sesion.php">Perfil</a>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>logout.php">Cerrar Sesion</a>
			<?php
			} else {
			?>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>inicio_sesion.php">Inicio de Sesion</a>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_usuario.php">Registrarse</a>
			<?php
			}
			?>
		</nav>
	</div>
</header>

	<div class="capa"></div>

	<input type="checkbox" id="btn-menu">
	<div class="container-menu">
		<div class="cont-menu">
			<nav>
			<?php if (isset($_SESSION) && isset($_SESSION['correo'])) {
				if($_SESSION['rol_nombre']=='Admin'){
			?>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>usuarios.php">Ver Usuario</a>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_rol.php">Crear Rol </a>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>rol.php">Ver Rol</a>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_categoria.php"></i>Crear categoria</a>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>categoria.php">Ver categoria</a>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_producto.php"></i>Crear Producto</a>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>productos.php">Ver Productos</a>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_imagen.php"></i>Crear Imagen de productos</a>
				<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>imagenes_productos.php"></i>Ver url de imagenes</a>
			<?php }else{ ?>
				<a class="nav-link active" aria-current="page" href="">Editar Perfil</a>
				<?php }} ?>
			</nav>
			<label for="btn-menu">✖️</label>
		</div>
	</div>
