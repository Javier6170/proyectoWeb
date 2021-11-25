function eliminar_categoria(id) {
    let accion = confirm("¿Esta seguro de eliminar la categoria");

    if (accion) {
        window.location.href = BASE_ROOT_URL + "eliminar_categoria.php?id=" + id;
    }
    //alert(accion);
    //alert(BASE_ROOT_URL);
}