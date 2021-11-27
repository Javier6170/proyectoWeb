<div class="containerFooter">
    <footer class="py-5">
        <div class="row">
            <div class="d-flex justify-content-between">
                <h2 id="titulo">Store Dark</h2>
                <ul class="list-unstyled d-flex">
                    <h3>
                        <li class="ms-3"><i class="fab fa-twitch"></i></li>
                    </h3>
                    <h3>
                        <li class="ms-3"><i class="fab fa-youtube"></i></li>
                    </h3>
                    <h3>
                        <li class="ms-3"><i class="fab fa-twitter"></i></li>
                    </h3>
                    <h3>
                        <li class="ms-3"><i class="fab fa-instagram"></i></li>
                    </h3>
                    <h3>
                        <li class="ms-3"><i class="fab fa-facebook"></i></li>
                    </h3>
                </ul>
            </div>
            <div class="py-4 my-4 border-top"></div>

            <div class="col-6 left">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="<?php echo $BASE_ROOT_URL; ?>index.php" class="nav-link p-0 text-light">Inicio</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo $BASE_ROOT_URL; ?>quienes_somos.php" class="nav-link p-0 text-light">Quienes Somos</a></li>
                </ul>
            </div>


            <div class="col-6 right">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="<?php echo $BASE_ROOT_URL; ?>comunidad.php" class="nav-link p-0 text-light">Comunidad</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo $BASE_ROOT_URL; ?>centro_ayuda.php" class="nav-link p-0 text-light">Centro de Ayuda</a></li>
                </ul>
            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>&copy; 2021 dark Store</p>
            </div>
    </footer>
</div>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script>
    const BASE_ROOT_URL = "<?php echo $BASE_ROOT_URL ?>";
</script>
</body>
</html>