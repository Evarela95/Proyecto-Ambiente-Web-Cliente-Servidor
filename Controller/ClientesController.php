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
        $_SESSION["sesionTipoUsuario"] = $resultado["tipousuario_tipousuario"];
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
                echo '<td width=20%> <input type="button" style="margin: 0 auto;"onclick="addProduct('.  $resultado["id_producto"].', )" class="btn btn-primary" value="Agregar"> </td>';       
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
            echo '<td><a class="btn btn-primary" href="EditarPerfil.php?q=' . $resultado["id_usuario"] . '">Actualizar<a/>    ';
        else
            echo '<td><a class="btn btn-primary" style="cursor: not-allowed">Actualizar<a/>    ';

        if($_SESSION["sesionId"] != $resultado["id_usuario"])
            echo '<a class="btn btn-danger open-UserDialog" data-toggle="modal" style=" color: white" data-target="#DeleteUserModal" data-id=' . $resultado["id_usuario"] . '>Eliminar</a></td>';
        else
            echo '<a class="btn btn-danger" style="cursor: not-allowed color: white">Eliminar</a></td>';

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
     header("Location: login.php"); 
    
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
    $tipoUsuario = $_POST["tipoUsuario"];
    $Username = $_POST["NombreUsuario"];
    $Contrasena = $_POST["Contrasena"];
    
    ActualizarUsuarioModel($Id,$Nombre,$PrimApellido,$SegApellido,$Correo,$tipoUsuario, $Username,$Contrasena); 
   
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
            echo '<td> <button class="btn btn-danger btn-sm" id="btnReducir" name="btnReducir" onclick="JSRESTAR('. $resultado["id_producto"] .')"> - </button></td>';
            echo '<td id="btnReducir" name="btnReducir">' . number_format($resultado["cantidad"]) . '</td>';
            echo '<td> <button class="btn btn-info btn-sm" id="btnSumar" name="btnSumar" onclick="JSSUMAR('. $resultado["id_producto"] .')"> + </button></td>'; 
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

if(isset($_POST["restar"]))
{
    $id_producto = $_POST["id"];
    ReducirCantidadModel($_SESSION["sesionId"], $id_producto); 
}

if(isset($_POST["sumar"]))
{
    $id_producto = $_POST["id"];
    //ReducirCantidadModel($_SESSION["sesionId"], $id_producto, 1); 
}

function ListarTiposUsuario($tipo)
{
    $datos = ListarTiposUsuarioModel();   

    if($datos -> num_rows > 0)
    {
      
        while($fila = mysqli_fetch_array($datos))
        {
            if($tipo == $fila["tipoUsuario"])
            echo '<div class="form-check">';

            echo '<input class="form-check-input" type="radio" name="tipoUsuario" id="tipoUsuario" checked>';

            echo '<label class="form-check-label" id="tipoUsuario" name="tipoUsuario" for="tipoUsuario"' . $fila["tipoUsuario"] . '"><h3>' . $fila["descripcion"] . '</h3></label>';
            echo '</div>';
          
        }
    }
}

?>