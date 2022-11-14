<?php
include_once __dir__ . '/ConnBD.php';

function ValidarCredenciales($Usuario, $Contrasena)
{
    $enlace = OpenDB();
    $procedimiento ="CALL ValidarCredenciales('$Usuario', '$Contrasena');";
    $datosUsuario = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosUsuario;
}


function ListarUsuarios()
{
    $enlace = OpenDB();
    $procedimiento = "CALL ListarUsuarios();";
    $datosUsuarios = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosUsuarios;
}

?>