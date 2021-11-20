function eliminar_rol(id){
    let accion = confirm("¿Esta seguro de eliminar el rol?");

    if(accion) {
        window.location.href = BASE_ROOT_URL+"eliminar_producto.php?id="+id;
    }
    //alert(accion);
    //alert(BASE_ROOT_URL);
}