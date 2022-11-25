<?php include_once __dir__ . '\generales.php'; 
include_once __DIR__ . '\Controller\ClientesController.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php headerSite(); ?>
</head>

<body>
    <!-- header section start -->
    <?php headerSection(); ?>
    <!-- contact section start -->
    <div class="contact_section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="email_box">
                        <div class="input_main">
                            <div class="container">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Nombre" name="Nombre" id="Nombre" onblur="RegistrarDatos();">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Primero apellido"
                                            name="PrimerApellido" id="PrimerApellido" onblur="RegistrarDatos();">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Segundo apellido"
                                            name="SegundoApellido" id="SegundoApellido" onblur="RegistrarDatos();">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Correo" name="Correo" id="Correo" onblur="RegistrarDatos();">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Nombre de usuario"
                                            name="NombreUsuario" id="NombreUsuario" onblur="RegistrarDatos();">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="email-bt" placeholder="Contraseña"
                                            name="Contrasena" id="Contrasena" onblur="RegistrarDatos();">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Registrarse" name="btnRegistrarse" id="btnRegistrarse"
                                            class="btn btn-danger">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_6"><img src="images/img-6.png"></div>
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

    <script src="../Proyecto-Ambiente-Web-Cliente-Servidor/js/register.js"></script>
</body>

</php>