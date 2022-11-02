$(document).ready(function() {
    HabilitarBoton(true);
});

function RegistrarDatos() {
    let nombre = document.getElementById("Nombre").value;
    let primerApellido = document.getElementById("PrimerApellido").value;
    let segundoApellido = document.getElementById("SegundoApellido").value;
    let correo = document.getElementById("Correo").value;
    let usuario = document.getElementById("NombreUsuario").value;
    let contrasena = document.getElementById("Contrasena").value;

    if (nombre.trim() != "" && primerApellido.trim() != "" && segundoApellido.trim() != "" && correo.trim() != "" && usuario.trim() != "" && contrasena.trim() != "") {
        HabilitarBoton(false);
    }else{
        HabilitarBoton(true);
    }
}

function HabilitarBoton(flag)
{
    $("#btnRegistrarse").prop("disabled", flag);
}