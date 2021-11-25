function eliminar_usuario(id) {
    let accion = confirm("¿Esta seguro de eliminar el usuario?");

    if (accion) {
        window.location.href = BASE_ROOT_URL + "eliminar_usuarios.php?id=" + id;
    }
    //alert(accion);
    //alert(BASE_ROOT_URL);
}