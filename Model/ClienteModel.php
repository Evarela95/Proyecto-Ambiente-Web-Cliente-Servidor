<?php

include_once __DIR__ . '\ConnBD.php';

function ConsultarDatosUsuarioModel($id)
{
   $enlace = OpenDB();
    $procedimiento = "CALL ConsultarUserId($id);";
    $datos = $enlace -> query ($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ValidarCredenciales($Usuario, $Contrasena)
{
    $enlace = OpenDB();
    $procedimiento ="CALL ValidarCredenciales('$Usuario', '$Contrasena');";
    $datosUsuario = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosUsuario;
}

function ListarProductosModel()
{
    $enlace = OpenDB();
    $procedimiento = "CALL ListarProductos();";
    $datosProductos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosProductos;
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

function ActualizarUsuarioModel($Id,$Nombre,$PrimApellido,$SegApellido,$Correo,$Username,$Contrasena)
{
    $enlace = OpenDB();

    $procedimiento = "CALL ActualizarUser($Id,'$Nombre','$PrimApellido','$SegApellido','$Correo','$Username','$Contrasena');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

/*
function pConsultarMenu($tipoUsuario)
{
    $enlace = OpenDB();
    $procedimiento = "CALL pConsultarMenu($tipoUsuario);";
    $datosMenu = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosMenu;
}*/

?>