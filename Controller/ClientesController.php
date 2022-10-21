<?php
session_start();
include_once 'Model/ClientesModel.php';

if(isset($_POST["btnIngresar"]))
{
    $usuario = $_POST["Usuario"];
    $contrasena = $_POST["Contrasena"];
    $datosUsuario = ValidarCredenciales($usuario, $contrasena);

if($datosUsuario -> num_rows > 0)
{
    
    $_SESSION["sesionNombre"] = "Eduardo";
    
    header("Location: View\inicio.php");
}else{

    header("Location: View\index.php");
}
}

?>