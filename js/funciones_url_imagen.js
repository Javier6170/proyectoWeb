function eliminar_url_imagen(id) {
    let accion = confirm("¿Esta seguro de eliminar el url de la imagen?");

    if (accion) {
        window.location.href = BASE_ROOT_URL + "eliminar_url_imagen.php?id=" + id;
    }
    //alert(accion);
    //alert(BASE_ROOT_URL);
}