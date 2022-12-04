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

function ListarProductosModel($q)
{
    $enlace = OpenDB();
    $procedimiento = "CALL ListarProductos($q);";
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

function AddProductModel($id_usuario, $id_producto, $cantidad)
{
    $enlace = OpenDB();

    $procedimiento = "CALL InsertarCarrito($id_usuario,$id_producto,$cantidad);";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function InactivarUsuarioModel($Id_usuario)
{
    $enlace = OpenDB();
    $procedimiento = "call InactivarUsuario($Id_usuario);";

    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function LlenarTablaCarritoModel($IdUsuario)
{
    $enlace = OpenDB();
    $procedimiento = "CALL LlenarTablaCarrito($IdUsuario);";
    $datosCarrito = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosCarrito;
}

function ConsultarTotalModel($IdUsuario)
{
    $enlace = OpenDB();
    $procedimiento = "CALL ConsultarTotal($IdUsuario);";
    $datosCarritoTotal = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosCarritoTotal;
}

function EliminarCarritoModel($IdUsuario)
{
    $enlace = OpenDB();
    $procedimiento = "CALL EliminarCarrito($IdUsuario);";
    $datosCarro = $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function PagarCarritoModel($IdUsuario, $Total)
{
    $enlace = OpenDB();
    $procedimiento = "CALL PagarCarrito($IdUsuario, $Total);";
    $datosCarro = $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function ListarTiposUsuarioModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarTiposUsuario();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function pConsultarMenu($tipoUsuario)
{
    $enlace = OpenDB();
    $procedimiento = "CALL pConsultarMenu($tipoUsuario);";
    $datosMenu = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosMenu;
}

?>