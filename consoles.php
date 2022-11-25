<?php 

if (session_status() == PHP_SESSION_NONE)
session_start();

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
    <ol class="breadcrumb">
                <li> <?php echo $_SESSION["sesionNombre"]; ?></li>
            </ol>
    <!-- banner section start -->
    <!-- product section start -->
    
    <div class="col-md-12 margin-bottom-15">
                    <div class="col-md-12 margin-bottom-15">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                CargarProductos();
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