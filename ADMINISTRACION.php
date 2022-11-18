<?php 


if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
include_once __DIR__ . '\generales.php';
include_once __DIR__ . '.\Controller\ClientesController.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php headerSite(); ?>

    
</head>

<body>
    <?php headerSection(); ?>
    
    
    <div class="row">
                    <div class="col-md-12 margin-bottom-15">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Primer apellido</th>
                                    <th>Segundo apellido</th>
                                    <th>Usuario</th>
                                    <th>Correo Electrónico</th>
                                    <th>Tipo Usuario</th>
                                    <th>Contraseña</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                CargarUsuarios();
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>


        <!-- footer section start -->
        <?php footerSection(); ?>
        <!-- footer section end -->

        <!-- copyright section start -->
        <?php copyRightSection() ?>
        <!-- copyright section end -->
        <!-- Javascript files-->
        <?php jsSection() ?>
</body>

</php>

