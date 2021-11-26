function editarDiv() {
    var idprovincia = document.getElementById("url_imagen");
    var pro = idprovincia.options[idprovincia.selectedIndex].value;
    document.getElementById("imgSeleccionada").src = pro;
}