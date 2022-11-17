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

function EliminarUsuarios(){
    $enlace = OpenDB();
    $procedimiento = "CALL EliminarUsuarios();";
    $datosUsarios = $enlace -> query($procedimiento);
}

function RegistrarUsuario($Nombre,$PrimApellido,$SegApellido,$Correo,$Username,$Contrasena)
{
    $enlace = OpenDB();
    $procedimiento = "CALL RegistrarUsuario('$Nombre','$PrimApellido','$SegApellido','$Correo','$Username','$Contrasena');";
    $datosRegistrar = $enlace -> query($procedimiento);

    CloseDB($enlace);
}

?>