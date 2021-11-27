<?php if(isset($_SESSION["mensaje"]) && isset($_SESSION["mensaje"]['exito'])) {?>
<div class="m-4">
    <!-- Success Message -->
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Éxito!</strong> </strong> <?php 
        echo isset($_SESSION["mensaje"]['mensaje'])?
            $_SESSION["mensaje"]['mensaje']:"Proceso éxitoso!";
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
</div>
<?php 
    unset($_SESSION["mensaje"]);
}?>
<?php if(isset($_SESSION["mensaje"]) && isset($_SESSION["mensaje"]['error'])) {?>
<div class="m-4">
    <!-- Error Message -->
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong> <?php 
        echo isset($_SESSION["mensaje"]['mensaje'])?
            $_SESSION["mensaje"]['mensaje']:"Error al intentar realizar el proceso!";
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
</div>
<?php 
    unset($_SESSION["mensaje"]);
}?>