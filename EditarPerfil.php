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
            <div class="row">
                <div class="col-md-6">
                    <div class="email_box">
                        <div class="input_main">
                            <div class="container">
                            <div class="form-group">
                                    
                                        <input type="text" class="email-bt" id="txtId" name="txtId" readonly value=<?php echo $datos["id_usuario"] ?> >
                                    </div>        
                            <div class="form-group">
                                    
                                        <input type="text" class="email-bt"  placeholder="Nombre" id="Nombre" name="Nombre"
                                        value=<?php echo $datos["nombre"] ?>>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Primero apellido"
                                            name="PrimerApellido" id="PrimerApellido"  value=<?php echo $datos["primApellido"] ?>>
                                                                                    
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Segundo apellido"
                                            name="SegundoApellido" id="SegundoApellido"  value=<?php echo $datos["segApellido"] ?>>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Correo" name="Correo" id="Correo" value=<?php echo $datos["correo"] ?>>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Estado" name="Estado" id="Estado" value=<?php echo $datos["estado"] ?>>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Nombre de usuario"
                                            name="NombreUsuario" id="NombreUsuario"  value=<?php echo $datos["username"] ?>>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="email-bt" placeholder="Contraseña"
                                            name="Contrasena" id="Contrasena" value=<?php echo $datos["contrasena"] ?>>
                                    </div>
                                    <div class="row">
                    
                                    <div class="form-group">
                                        <input type="submit" value="Actualizar" name="btnActualizar" id="btnActualizar"
                                            class="btn btn-danger">
                                            <a href="MantUsuarios.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    </div>
                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblTipoUsuario" class="control-label">Tipo de Usuario</label>
                        <select class="form-control" id="cboTipoUsuario" name="cboTipoUsuario" required>
                                <?php 
                                ListarTiposUsuario($datos["tipoUsuario"]); 
                                ?>
                            </select>  
                    </div>
            </div>
        </div>
    </div>
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