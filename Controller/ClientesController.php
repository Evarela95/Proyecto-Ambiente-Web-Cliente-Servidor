<?php

session_start();
include_once __dir__ . '/../Model/ClientesModel.php';

if(isset($_POST["btnIngresar"]))
{
    $Usuario = $_POST["Usuario"];
    $Contrasena = $_POST["Contrasena"];
    $datosUsuario = ValidarCredenciales($Usuario, $Contrasena);

    if($datosUsuario -> num_rows > 0)
    {
        $_SESSION["sesionNombre"] = "??????????";
        
        header("Location: login.php");
    }else{

        header("Location: index.php");
    }
}

?> 