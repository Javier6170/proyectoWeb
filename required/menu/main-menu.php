<?php
if ($_SESSION['rol_nombre'] == 'NULL') {
	$menuProducto = FALSE;
	$menuUsuario = FALSE;
	$menuRol = FALSE;
	$menuCategoria = FALSE;
	$menuImagenProducto = FALSE;
	$menuactualizarPerfil = FALSE;

	if (tiene_permiso_sesion('productos') || tiene_permiso_sesion('crear_producto'))
		$menuProducto = TRUE;

	if (tiene_permiso_sesion('usuarios') || tiene_permiso_sesion('crear_usuario'))
		$menuUsuario = TRUE;

	if (tiene_permiso_sesion('rol') || tiene_permiso_sesion('crear_rol'))
		$menuRol = TRUE;

	if (tiene_permiso_sesion('categoria') || tiene_permiso_sesion('crear_categoria'))
		$menuCategoria = TRUE;

	if (tiene_permiso_sesion('crear_imagen') || tiene_permiso_sesion('imagenes_productos'))
		$menuImagenProducto = TRUE;
	if (tiene_permiso_sesion('actualizar_usuario_user'))
		$menuactualizarPerfil = TRUE;
}

?>
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
				if ($_SESSION['rol_nombre'] == 'Admin') {
			?>
					<?php if (tiene_permiso_sesion('crear_usuario')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_usuario.php">Crear Usuario</a>
					<?php } ?>
					<?php if (tiene_permiso_sesion('productos')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>usuarios.php">Ver Usuario</a>
					<?php } ?>
					<?php if (tiene_permiso_sesion('crear_rol')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_rol.php">Crear Rol </a>
					<?php } ?>
					<?php if (tiene_permiso_sesion('rol')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>rol.php">Ver Rol</a>
					<?php } ?>
					<?php if (tiene_permiso_sesion('crear_categoria')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_categoria.php"></i>Crear categoria</a>
					<?php } ?>
					<?php if (tiene_permiso_sesion('categoria')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>categoria.php">Ver categoria</a>
					<?php } ?>
					<?php if (tiene_permiso_sesion('crear_producto')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_producto.php"></i>Crear Producto</a>
					<?php } ?>
					<?php if (tiene_permiso_sesion('productos')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>productos.php">Ver Productos</a>
					<?php } ?>
					<?php if (tiene_permiso_sesion('crear_imagen')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>crear_imagen.php"></i>Crear Imagen de productos</a>
					<?php } ?>
					<?php if (tiene_permiso_sesion('imagenes_productos')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>imagenes_productos.php"></i>Ver url de imagenes</a>
					<?php } ?>
				<?php } else { ?>
					<?php if (tiene_permiso_sesion('actualizar_usuario_user')) { ?>
						<a class="nav-link active" aria-current="page" href="<?php echo $BASE_ROOT_URL; ?>actualizar_usuario_user.php">Editar Perfil</a>
					<?php } ?>
			<?php }
			} ?>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>