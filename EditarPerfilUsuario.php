<?php 

if (session_status() == PHP_SESSION_NONE)
    session_start();
    
   include_once __DIR__ . '\generales.php';
   include_once __DIR__ . '\Controller\ClientesController.php';

   $datos = ConsultarDatosUser($_SESSION["sesionId"]);
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
                                           <input class="form-control" type="text" id="txtId" 
                                             name="txtId" readonly value=<?php echo $datos["id_usuario"] ?> >
                                        </div>        
                                         <div class="form-group">
                                           <input class="form-control" type="text" placeholder="Nombre" id="Nombre" 
                                            name="Nombre" value=<?php echo $datos["nombre"] ?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Primero apellido"
                                            name="PrimerApellido" id="PrimerApellido"  value=<?php echo $datos["primApellido"] ?>>                                      
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Segundo apellido"
                                            name="SegundoApellido" id="SegundoApellido"  value=<?php echo $datos["segApellido"] ?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Correo" name="Correo" id="Correo" value=<?php echo $datos["correo"] ?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Nombre de usuario"
                                            name="NombreUsuario" id="NombreUsuario"  value=<?php echo $datos["username"] ?>>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Contrase??a"
                                            name="Contrasena" id="Contrasena" value=<?php echo $datos["contrasena"] ?>>
                                        </div>
                                        <div class="form-group" style="display: flex;  align-items: center; justify-content: center;">
                                            <input type="submit" value="Actualizar" name="btnActualizar" id="btnActualizar"
                                            class="btn btn-primary"    >
                                            <a href="index.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                         </div>
                        </div>

                    </div>
                </div>
            </div>
            
                <div class="col-md-6">
                    <div class="image_6"><img src="images/MmQa.gif" width="100%" style="border-radius: 10%; "></div>
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