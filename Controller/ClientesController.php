<?php

if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __dir__ . '/../Model/ClientesModel.php';

if(isset($_POST["btnIngresar"]))
{
    $Usuario = $_POST["Usuario"];
    $Contrasena = $_POST["Contrasena"];
    $datosUsuario = ValidarCredenciales($Usuario, $Contrasena);

    if($datosUsuario -> num_rows > 0)
    {
        $resultado = mysqli_fetch_array($datosUsuario);
        $_SESSION["sesionNombre"] = $resultado["nombre"];
        $_SESSION["sesionTipoUsuario"] = $resultado["tipoUsuario"];
        header("Location: index.php");
        
    }else{
        header("Location: login.php");
        
    }
}


function CargarUsuarios()
{
    $datosUsuarios = ListarUsuarios();

    if($datosUsuarios -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosUsuarios))
        {
            echo "<tr>";
            echo "<td>" . $resultado["nombre"] . "</td>";
            echo "<td>" . $resultado["primApellido"] . "</td>";
            echo "<td>" . $resultado["segApellido"] . "</td>";
            echo "<td>" . $resultado["username"] . "</td>";
            echo "<td>" . $resultado["correo"] . "</td>";
            echo "<td>" . $resultado["descripcion"] . "</td>";
            echo "<td>" . $resultado["contrasena"] . "</td>";
            echo '<td>
            <a class="btn btn-primary" href="EditarPerfil.php">Editar<a/>
            <a class="btn btn-primary" data-toggle="modal" data-target="#confirmDelete" data-backdrop="static" data-keyboard="false">Eliminar</a>
         </td>';
    echo "</tr>";

            
        }
    }
}

?> 