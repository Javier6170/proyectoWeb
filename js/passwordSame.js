function validar_contraseñas() {

    const contrasena = document.getElementById('contrasena').value
    const contrasena2 = document.getElementById('contrasena2').value
    if (contrasena != contrasena2) {
        alert("Las contraseñas no son iguales")
        return false
    } else {
        return true
    }
}