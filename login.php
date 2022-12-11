<?php 
include_once __dir__ . '\generales.php'; 
include_once __DIR__ . '/Controller/ClientesController.php';
?>

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
                <div class="col-md-6" >
                    <div class="email_box" style="border-bottom-color: #00FF00;">
                        <div class="input_main" >
                            <div class="container" >
                                <form action="" method="post" id="form" >
                                    <div class="form-group">
                                    <div class="product_text" style="color: #5ca0e9;">Iniciar <span style="color: #5ca0e9;">sesión</span>
                </div>
                                        <br>
                                        <input class="form-control" type="text" placeholder="Usuario" name="Usuario"
                                            id="Usuario" onblur="ValidarDatos();" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Contraseña" id="Contrasena"
                                            name="Contrasena" onblur="ValidarDatos();">
                                    </div>
                                    <div class="form-group" style="display: flex;  align-items: center; justify-content: center;">
                                        <input type="submit" value="Ingresar" id="btnIngresar" name="btnIngresar"
                                            class="btn btn-danger" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_6"><img src="images/5996cac93d7eee15b8c98e62.jpeg" width="100%" style="border-radius: 15%; "></div>
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
    <script src="../Proyecto-Ambiente-Web-Cliente-Servidor/js/login.js"></script>
</body>

</html>