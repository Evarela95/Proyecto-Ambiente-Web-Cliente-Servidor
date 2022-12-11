<?php 

if (session_status() == PHP_SESSION_NONE)
    session_start();
    
   include_once __DIR__ . '\generales.php';
   include_once __DIR__ . '\Controller\ClientesController.php';

   $datos = ConsultarDatosUser($_GET["q"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php headerSite(); ?>
</head>

<body>

<form action="" method="post">
    <!-- header section start -->
    <?php headerSection(); ?>
    
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            
            <div class="templatemo-panels">
        
            <!-- contact section start -->
    <div class="contact_section layout_padding padding_top_0">
        <div class="container">
            <div class="row" style="display: flex;  align-items: center; justify-content: center;">
                <div class="col-md-6">
                    <div class="email_box">
                        <div class="input_main" >
                            <div class="container" >
                            <div class="product_text" style="color: #00008B;">ADMINISTRACIóN </div>
                                <div class="form-group" >
                                <label class="email" for="txtId">ID</label>
                                        <input class="form-control" type="text" id="txtId" name="txtId" readonly value=<?php echo $datos["id_usuario"] ?> >
                                </div>        

                                <div class="form-group">
                                <label for="Nombre">Nombre</label>
                                        <input class="form-control" type="text" placeholder="Nombre" id="Nombre" name="Nombre"
                                        value=<?php echo $datos["nombre"] ?>>
                                        
                                </div>

                                <div class="form-group">
                                <h4>Tipo de usuario: <?php echo $datos["descripcion"] ?></h4>
                                        
                                        <input type="submit" value="Promover" name="btnPromover" id="btnPromover"
                                            class="btn btn-success">
                                            <input type="submit" value="Degradar" name="btnDegradar" id="btnDegradar"
                                            class="btn btn-warning">

                                </div>

                                <div class="form-group">
                                <label for="PrimerApellido">Primer Apellido</label>
                                        <input class="form-control" type="text" placeholder="Primero apellido"
                                            name="PrimerApellido" id="PrimerApellido"  value=<?php echo $datos["primApellido"] ?>>
                                                                                    
                                </div>
                                <div class="form-group">
                                <label for="SegundoApellido">Segundo Apellido</label>
                                        <input class="form-control" type="text" placeholder="Segundo apellido"
                                            name="SegundoApellido" id="SegundoApellido"  value=<?php echo $datos["segApellido"] ?>>
                                </div>
                                <div class="form-group">
                                <label for="Correo">Correo</label>
                                        <input class="form-control" type="text" placeholder="Correo" name="Correo" id="Correo" value=<?php echo $datos["correo"] ?>>
                                </div>

                                <div class="form-group">
                                <label for="NombreUsuario">Nombre de usuario</label>
                                        <input class="form-control" type="text" placeholder="Nombre de usuario"
                                            name="NombreUsuario" id="NombreUsuario"  value=<?php echo $datos["username"] ?>>
                                </div>
                                <div class="form-group">
                                <label for="Contrasena">Contrasena</label>
                                        <input type="password" class="form-control"  placeholder="Contraseña"
                                            name="Contrasena" id="Contrasena" value=<?php echo $datos["contrasena"] ?>>
                                </div>
                                <div class="row"style="display: flex;  align-items: center; justify-content: center;">
                    
                                <div class="form-group" >
                                        <input type="submit" value="Actualizar" name="btnActualizar" id="btnActualizar"
                                            class="btn btn-primary" onclick="alert('SE ACTUALIZÓ EL USUARIO');">
                                            
                                            <a href="ADMINISTRACION.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                            
                                        </div>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <br>
    <br>
  
    <!-- contact section end -->
    <!-- footer section start -->
    <?php footerSection(); ?>
    <!-- footer section end -->
    <!-- copyright section start -->
    <?php copyRightSection() ?>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <?php jsSection() ?>

    <script src="../Proyecto-Ambiente-Web-Cliente-Servidor-main/js/register.js"></script>

    </form>
</body>

</php>