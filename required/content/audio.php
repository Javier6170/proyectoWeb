<?php
$productos = obtener_listado_productos_con_category($conn);
?>
<section class="matriz-productos">
    <div class="vid-portada">
        <div class="header-video1">
            <video src="https://redragon.es/content/uploads/2021/05/Header-Lamia1920x880-1.m4v" class="video" autoplay muted loop></video>
        </div>
    </div>
    <?php
    foreach ($productos as $index => $p) {
        if ($p['category_nombre'] == 'Audio') {
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