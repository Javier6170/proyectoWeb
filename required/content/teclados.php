<?php
$productos = obtener_listado_productos_con_category($conn);

$carrito_mio = $_SESSION['carrito'];
$_SESSION['carrito'] = $carrito_mio;

// contamos nuestro carrito
if (isset($_SESSION['carrito'])) {
    for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
        if ($carrito_mio[$i] != NULL) {
            $total_cantidad = $carrito_mio['cantidad'];
            $total_cantidad++;
            $totalcantidad += $total_cantidad;
        }
    }
}

?>
<section>
    <div class="img-portada">
        <div class="img">
            <img src="https://redragon.es/content/uploads/2021/04/Harpe-Pro-K503-Desktop1920x880.jpg" alt="producto 1">
        </div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Mi tienda</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->



        <!-- MODAL CARRITO -->
        <div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">



                        <div class="modal-body">
                            <div>
                                <div class="p-2">
                                    <ul class="list-group mb-3">
                                        <?php
                                        if (isset($_SESSION['carrito'])) {
                                            $total = 0;
                                            for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
                                                if ($carrito_mio[$i] != NULL) {

                                        ?>
                                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                        <div class="row col-12">
                                                            <div class="col-6 p-0" style="text-align: left; color: #000000;">
                                                                <h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; // echo substr($carrito_mio[$i]['titulo'],0,10); echo utf8_decode($titulomostrado)."..."; 
                                                                                                                                        ?></h6>
                                                            </div>
                                                            <div class="col-6 p-0" style="text-align: right; color: #000000;">
                                                                <span style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> €</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                        <?php
                                                    $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                                                }
                                            }
                                        }
                                        ?>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span style="text-align: left; color: #000000;">Total (EUR)</span>
                                            <strong style="text-align: left; color: #000000;"><?php
                                                                                                if (isset($_SESSION['carrito'])) {
                                                                                                    $total = 0;
                                                                                                    for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
                                                                                                        if ($carrito_mio[$i] != NULL) {
                                                                                                            $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                                echo $total; ?> €</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a type="button" class="btn btn-primary" href="<?php echo $BASE_ROOT_URL; ?>borrarcarro.php">Vaciar carrito</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL CARRITO -->

    </div>
    <?php
    foreach ($productos as $index => $p) {
        if ($p['category_nombre'] == 'Teclado') {
    ?>
            <div class="card estilo-a">
                <a href="#">
                    <div class="img-container">
                        <img src=<?php echo strval($p['url_imagen']); ?> alt="producto 1">
                    </div>

                    <form id="formulario" name="formulario" method="post" action="cart.php">
                        <input name="precio" type="hidden" id="precio" value=<?php echo strval($p['precio']) ?> />
                        <input name="titulo" type="hidden" id="titulo" value=<?php echo $p["nombre"] ?> />
                        <input name="cantidad" type="hidden" id="cantidad" value=<?php echo strval($p['stock']) ?> class="pl-2" />
                        <p><?php echo $p['nombre']?></p>
                        <p>$<?php echo $p['precio']?> COP</p>
                        <p>Stock: <?php echo $p['stock']?></p>
                        <center><button class="car" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button></center>
                    </form>


                </a>
            </div>
    <?php
        }
    }
    ?>
</section>