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
            echo '<td width=20%><h2>' . $resultado["descripcion"] . '</h2></td>';
            echo '<td width=20%><h2> ₡ ' . number_format($resultado ["precio"]) . '</h2></td>';
            echo '<td width=20% style="text-align:center"><img src="images/' . $resultado["imagen"] . '" width="200" height="150"></td>';       
           
            if(isset($_SESSION["sesionId"]))
            {
                echo '<td width=20%> <input type="button" onclick="addProduct('.  $resultado["id_producto"].', )" class="btn btn-primary" value="Agregar"> </td>';       
            }
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
            
            if($_SESSION["sesionId"] != $resultado["id_usuario"])
            echo '<td><a class="btn" href="EditarPerfil.php?q=' . $resultado["id_usuario"] . '">Actualizar<a/>';
        else
            echo '<td><a class="btn" style="cursor: not-allowed">Actualizar<a/>';

        if($_SESSION["sesionId"] != $resultado["id_usuario"])
            echo '<a class="btn open-UserDialog" data-toggle="modal" data-target="#DeleteUserModal" data-id=' . $resultado["id_usuario"] . '>Eliminar</a></td>';
        else
            echo '<a class="btn" style="cursor: not-allowed">Eliminar</a></td>';

        echo "</tr>";
            
        }
    }
}



if(isset($_POST["eliminarUser"]))
{
    $Id = $_POST["Id"];
    eliminarUser($Id);  
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
    $Id = $_POST["Id_usuario"];
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


if(isset($_POST['btnAddProduct']))
{
    $id_producto = $_POST["id_producto"];
    AddProductModel($_SESSION["sesionId"], $id_producto, 1);
}

function CargarCarrito()
{
    $datosCarrito = LlenarTablaCarritoModel($_SESSION["sesionId"]);
    if($datosCarrito -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosCarrito))
        {
            echo '<tr>';
            echo '<td>' . $resultado["descripcion"] . '</td>';
            echo '<td> ₡ ' . number_format($resultado["precio"]) . '</td>';
            echo '<td> <button class="btn btn-danger btn-sm" id = "resta" name ="resta"> - </button> </td>';
            echo '<td <button id="cantidad" name="cantidad">' . number_format($resultado["cantidad"]) . '</button></td>';
            echo '<td> <button class="btn btn-info btn-sm" id = "suma" name ="suma"> + </button></td>';

            if(isset($_POST["resta"]))
{   $Cantidad = number_format($resultado["cantidad"]);
     RegistrarUsuario($_SESSION["sesionId"],$Cantidad);
}
           
        }
    }
}


function CargarTotal()
{
    $datosCarritoTotal = ConsultarTotalModel($_SESSION["sesionId"]);
    if($datosCarritoTotal -> num_rows > 0)
    {
        $resultado = mysqli_fetch_array($datosCarritoTotal);
        return $resultado["Total"];
    }
    return 0;
}

function CargarImpuesto()
{
    $datosCarritoTotal = ConsultarTotalModel($_SESSION["sesionId"]);
    if($datosCarritoTotal -> num_rows > 0)
    {
        $resultado = mysqli_fetch_array($datosCarritoTotal);
        return $resultado["Total"];
    }
    return 0;
}

if(isset($_POST["btnEliminar"]))
{
    $IdUsuario = $_SESSION["sesionId"];
    EliminarCarritoModel($IdUsuario);  
}


if(isset($_POST["btnPagar"]))
{
    $IdUsuario = $_SESSION["sesionId"];
    $Total = $_POST["txtTotal"];
    PagarCarritoModel($IdUsuario, $Total);  
}



function CargarMenu()
{
    if($_SESSION["sesionTipoUsuario"] == null)
        header("Location: index.php");

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
    }
}



function ListarTiposUsuario($tipo)
{
    $datos = ListarTiposUsuarioModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione... </option>';

        while($fila = mysqli_fetch_array($datos))
        {
            if($tipo == $fila["tipoUsuario"])
                echo '<option selected value="' . $fila["tipoUsuario"] . '">' . $fila["descripcion"] . '</option>';
            else
                echo '<option value="' . $fila["tipoUsuario"] . '">' . $fila["descripcion"] . '</option>';
        }
    }
}

?>