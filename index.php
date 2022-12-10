<?php 
if (session_status() == PHP_SESSION_NONE)
session_start();

include_once __dir__ . '\generales.php';  
include_once __DIR__ . '\Controller\ClientesController.php';
//include_once 'Model/ClientesModel.php';
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
    <ol class="breadcrumb">
                <li> 
                    <?php 
                    if(isset($_SESSION["sesionNombre"]))
                       echo $_SESSION["sesionNombre"]; 
                    ?> 
                </li>
            </ol>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">

                                <h1 class="controller_text">Consolas</h1>
                                <p class="banner_text">Contamos con todo tipo de consolas y marcas; Xbox, Play Station,
                                    Nintendo</p>
                               
                            </div>
                            <div class="col-md-5">
                                <div class="image_1"><img src="images/consolas.png"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- banner section end -->
        <!-- about section start -->
        <div class="about_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image_2"><img src="images/pcgamer.png"></div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="about_text">Computadoras</h1>
                        <p class="lorem_text">Ofrecemos computadoras gamer, tenemos computadoras
                            emsambladas</p>
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- product section start -->
        <div class="product_section layout_padding">
            <div class="container">
                <div class="product_text" style="color: white;">Nuestros <span style="color: #5ca0e9;">productos</span>
                </div>
                <div class="product_section_2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/ps5-tr.png"></div>
                           
                            <h1 class="game_text" style="color: white;">Play Station 5</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="image_2"> <img src="images/pc32.png"  />

                            </div>
                           
                            <h1 class="game_text" style="color: white;">PC gamer</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- product section end -->
        <!-- video section start -->
        <div class="video_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="video_text_2">Videojuegos</h1>
                        <p class="banner_text_2">Descubre nuestra lista de videojuegos esperando por ti, entre los más
                            famosos,
                            indies, videojuegos para jugar con tus amigos y familia. No te pierdas de la diversión</p>
                        
                    </div>
                    <div class="col-md-6">
                        <div class=""><img src="images/juegos.png" style="padding-bottom:80px"></div>
                    </div>
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
</html>