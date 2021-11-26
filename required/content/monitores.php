<?php
$productos = obtener_listado_productos_con_category($conn);
?>
<section>
    <div class="img-portada">
        <div class="img">
            <img src="https://redragon.es/content/uploads/2021/06/HERO-emerald.jpg" alt="producto 1">
        </div>
    </div>
    <?php
    foreach ($productos as $index => $p) {
        if ($p['category_nombre'] == 'Monitor') {
    ?>
            <div class="card estilo-a">
                <a href="#">
                    <div class="img-container">
                        <img src=<?php echo strval($p['url_imagen']); ?> alt="producto 1">
                    </div>
                    <p><?php echo $p['nombre'] ?></p>
                    <p><?php echo $p['precio'] ?> COP</p>
                </a>
            </div>
    <?php
        }
    }
    ?>
</section>