
$(document).ready(function() {
    HabilitarBoton(true);
});

function ValidarDatos() {
    let usuario = document.getElementById("Usuario").value;
    let contrasena = document.getElementById("Contrasena").value;

    if (usuario.trim() != "" && contrasena.trim() != "") {
        HabilitarBoton(false);
    }else{
        HabilitarBoton(true);
    }
}

function HabilitarBoton(flag)
{
    $("#btnIngresar").prop("disabled", flag);
}

function Redireccion(id)
{
    localStorage.setItem('idSeleccionado', id);
    window.location = "EditarPerfil.php"
}
