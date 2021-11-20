function eliminar_producto(id){
    let accion = confirm("¿Esta seguro de eliminar el producto?");

    if(accion) {
        window.location.href = BASE_ROOT_URL+"eliminar_producto.php?id="+id;
    }
    //alert(accion);
    //alert(BASE_ROOT_URL);
}