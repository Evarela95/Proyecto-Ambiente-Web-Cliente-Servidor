<?php include_once 'generales.php';
if (session_status() == PHP_SESSION_NONE)
session_start();?>



<!DOCTYPE html>
<html lang="en">

<head>
  <?php headerSite(); ?>
</head>

<body>
<?php headerSection(); ?>
<ol class="breadcrumb">
                <li> <?php echo $_SESSION["sesionNombre"]; ?> </li>
            </ol>
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image_2"><img src="images/img-2.png"></div>
                </div>
                <div class="col-md-6">
                    <h1 class="about_text">JustGame</h1>
                    <p class="lorem_text">JustGame desde 2022, es una empresa de Costa Rica, que se enfoca en la
                        comercialización de tecnología gamer. A su vez, importa y distribuye equipo cómputo gamer y
                        componentes informáticos.
                        Somo proveedores e integradores de soluciones con alta tecnología en hardware y software
                        respaldados por las diferentes marcas fabricantes.</p>
                        <p1 class="lorem_text">NUESTRAS TIENDAS</p1> 
                        <div class="col-md-6">
                            <div class=""><img src="images/fototienda2.jpg"></div>
                          </div>



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

</php>