<?php
$productos = obtener_listado_productos_con_category($conn);
?>
<section>
    <div class="img-portada">
        <div class="img">
            <img src="https://redragon.es/content/uploads/2021/04/Harpe-Pro-K503-Desktop1920x880.jpg" alt="producto 1">
        </div>
    </div>
    <?php
    foreach ($productos as $index => $p) {
    if($p['category_nombre']=='Teclado'){
    ?>
        <div class="card estilo-a">
            <a href="#">
                <div class="img-container">
                    <img src=<?php echo strval($p['url_imagen']); ?> alt="producto 1">   
                </div>
                <p><?php echo $p['nombre'] ?></p>
                <p><?php echo $p['precio'] ?> COP</p>
            </a>
            <form action="" method="POST" class="f">
            <center>
            <button type="submit" class="car"><i class="fas fa-cart-plus"i></i>  Comprar</button>
            </center>
            </form>
        </div>
    <?php
    }}
    ?>
</section>
