<?php

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
include_once __DIR__ . '\..\Model\ClienteModel.php';

function ConsultarDatosUser($id)
{
    $datos = ConsultarDatosUsuarioModel($id);
    return mysqli_fetch_array($datos);
}

if(isset($_POST["btnIngresar"]))
{
    $Usuario = $_POST["Usuario"];
    $Contrasena = $_POST["Contrasena"];
    $datosUsuario = ValidarCredenciales($Usuario, $Contrasena);

    if($datosUsuario -> num_rows > 0)
    {
        $resultado = mysqli_fetch_array($datosUsuario);
        $_SESSION["sesionId"] = $resultado["id_usuario"];
        $_SESSION["sesionNombre"] = $resultado["nombre"];
        $_SESSION["sesionTipoUsuario"] = $resultado["tipoUsuario"];
        header("Location: index.php");
        
    }else{
        header("Location: login.php");
        
    }
}

function CargarProductos($q)
{
    $datosProductos = ListarProductosModel($q);

    if($datosProductos -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosProductos))
        {
            
            echo '<tr>';
            echo '<td width=20%>' . $resultado["descripcion"] . '</td>';
            echo '<td width=20%>' . '₡ ' . $resultado ["precio"] . '</td>';
            echo '<td width=20% style="text-align:center"><img src="images/' . $resultado["imagen"] . '" width="200" height="150"></td>';       
            echo '<td width=20%> <input type="button" onclick="addProduct('.  $resultado["id_producto"].', )" class="btn btn-primary" value="Agregar"> </td>';       
            echo "</tr>";
        }
    }
}

function CargarUsuarios()
{
    $datosUsuarios = ListarUsuarios();
    if($datosUsuarios -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosUsuarios))
        {
            echo '<tr>';
            echo '<td>' . $resultado["nombre"] . '</td>';
            echo '<td>' . $resultado["primApellido"] . '</td>';
            echo '<td>' . $resultado["segApellido"] . '</td>';
            echo '<td>' . $resultado["username"] . '</td>';
            echo '<td>' . $resultado["correo"] . '</td>';
            echo '<td>' . $resultado["estado"] . '</td>';
            echo '<td>' . $resultado["descripcion"] . '</td>';
            echo '<td>' . $resultado["contrasena"] . '</td>';
            //echo '<td><img src=' . $resultado["url"] . '</td>';
            echo '<td> 
            <a class="btn btn-primary" href="EditarPerfil.php?q=' . $resultado["id_usuario"]. '">Editar<a/>
            <a class="btn open-UserDialog" data-toggle="modal" data-target="#DeleteUserModal" data-id=' . $resultado["id_usuario"] . '>Inactivar</a></td>;
            </td>';
            
            echo "</tr>";
        }
    }
}

if(isset($_POST["btnRegistrarse"]))
{   $Nombre = $_POST["Nombre"];
    $PrimApellido = $_POST["PrimerApellido"];
    $SegApellido = $_POST["SegundoApellido"]; 
    $Correo = $_POST["Correo"];
    $Username = $_POST["NombreUsuario"];
    $Contrasena = $_POST["Contrasena"];
     RegistrarUsuario($Nombre, $PrimApellido, $SegApellido, $Correo, $Username, $Contrasena);
}

if(isset($_POST["InactivarUsuario"]))
{
    $Id = $_POST["Id"];
    InactivarUsuarioModel($Id);  
}

if(isset($_POST["btnActualizar"]))
{
    $Id = $_POST["txtId"];
    $Nombre = $_POST["Nombre"];
    $PrimApellido = $_POST["PrimerApellido"];
    $SegApellido = $_POST["SegundoApellido"];
    $Correo = $_POST["Correo"];
    $Username = $_POST["NombreUsuario"];
    $Contrasena = $_POST["Contrasena"];
    
    ActualizarUsuarioModel($Id,$Nombre,$PrimApellido,$SegApellido,$Correo,$Username,$Contrasena); 
   
    header("Location: ADMINISTRACION.php");  
}

if(isset($_POST["btnCerrar"]))
{
    if (session_status() != PHP_SESSION_NONE)
        session_destroy();

        header("Location: index.php");
}

if(isset($_POST['btnAddProduct']))
{
    $id_producto = $_POST["id_producto"];
    AddProductModel($_SESSION["sesionId"], $id_producto, 1);
}

/*
function CargarMenu()
{
    if($_SESSION["sesionTipoUsuario"] == null)
        header("Location: \index.php");

    $datosMenu = pConsultarMenu($_SESSION["sesionTipoUsuario"]);

    if($datosMenu -> num_rows > 0)
    {
        echo '<div class="template-page-wrapper">
              <div class="navbar-collapse collapse templatemo-sidebar">
              <ul class="templatemo-sidebar-menu">';

        while($resultado = mysqli_fetch_array($datosMenu))
        {
            echo '<li><a href="' . $resultado["redireccion"] .  $resultado["texto"] . '</a></li>';
        }

       // echo '<li><a href="" data-toggle="modal" data-target="#confirmModal" data-backdrop="static" data-keyboard="false"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
         //     </ul>
           //   </div>';
    }
}*/

?> 