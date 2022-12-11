<?php include_once 'generales.php';
if (session_status() == PHP_SESSION_NONE)
session_start();
include_once __DIR__ . '\Controller\ClientesController.php';
include_once __dir__ . '\generales.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php headerSite(); ?>
</head>

<body>
<?php headerSection(); ?>
<ol class="breadcrumb">
                <li> 
                    <?php
                    if(isset($_SESSION["sesionNombre"]))
                    {
                       echo $_SESSION["sesionNombre"]; 
                    }
                    ?> 
                </li>
            </ol>
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-md-6">
                    <h1 class="about_text">JustGame</h1>
                    <h2 style="text-align: justify;">JustGame desde 2022, es una empresa de Costa Rica, que se enfoca en la
                        comercialización de tecnología gamer. A su vez, importa y distribuye equipo cómputo gamer y
                        componentes informáticos.
                        Somo proveedores e integradores de soluciones con alta tecnología en hardware y software
                        respaldados por las diferentes marcas fabricantes.</h2>                   
                </div><div class="col-md-6">
                    <div class="image_6"><img src="images/game-logo.jpg"width="200%"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- footer section start -->
    <?php footerSection(); ?>
    <!-- footer section end -->
    <!-- copyright section start -->
    <?php copyRightSection() ?>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <?php jsSection() ?>
</body>
                </html>