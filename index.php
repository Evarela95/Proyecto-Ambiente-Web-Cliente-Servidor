<?php 

include_once 'generales.php';
include_once 'Controller/ClientesController.php';
include_once 'Model/ClientesModel.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php headerSite(); ?>
</head>

<body>
    <?php headerSection(); ?>

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
                                    Nintendo, SteamDeck.</p>
                                <div class="shop_bt"><a href="consoles.php">Ver Más</a></div>
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
                        <p class="lorem_text">Ofrecemos computadoras gamer y sus componentes, tenemos computadoras
                            emsambladas o podés
                            escoger los componentes</p>
                        <div class="shop_bt_2"><a href="computers.php">Ver Más</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about section end -->
        <!-- product section start -->
        <div class="product_section layout_padding">
            <div class="container">
                <div class="product_text" style="color: white;">Nuestros <span style="color: #5ca0e9;">productos</span>
                </div>
                <div class="product_section_2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/ps5.png"></div>
                            <div class="price_text">Precio $ <span style="color: white;">200</span></div>
                            <h1 class="game_text" style="color: white;">Play Station 5</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/pcgam.jpg" style="width: 400px; height:335px">
                            </div>
                            <div class="price_text">Precio $ <span style="color: white;">300</span></div>
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
                        <div class="shop_bt"><a href="videogames.php">Ver Más</a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="image_4"><img src="images/juegos.png" style="padding-bottom:80px"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- video section end -->

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