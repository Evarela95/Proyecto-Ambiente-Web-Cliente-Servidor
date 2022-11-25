<?php include_once __dir__ . '\generales.php'; 
include_once __DIR__ . '\Controller\ClientesController.php';
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
    <!-- banner section start -->
    <!-- product section start -->
    <div class="product_section layout_padding">
        <div class="container">
            <div class="product_text">Juegos de <span style="color: #5ca0e9;">  Play Station 4 y 5 </span></div>
            <p class="long_text">Explora una generación de juegos aclamados por la crítica, como juegos de éxito exclusivos de consola de PlayStation</p>
            <div class="product_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image_2"><img src="images/crash4-ps4.png"></div>
                        <div class="price_text">Price $ <span style="color: #3a3a38;">59</span></div>
                        <h1 class="game_text">Crash Bandicoot 4 Its About Time  PlayStation 4</h1>
                        <p class="long_text">Los autores de la Spyro Reignited Trilogy desarrollan para Activision un nuevo videojuego de la saga Crash Bandicoot </p>
                    </div>
                    <div class="col-md-7">
                        <div class="image_2"><img src="images/pro26.png" ></div>
                        <div class="price_text">Price $ <span style="color: #3a3a38;">59</span></div>
                        <h1 class="game_text">Elden Ring  PlayStation 4</h1>
                        <p class="long_text">Elden Ring es un misterioso videojuego en el que trabaja FromSoftware, padres de Dark Souls, y George R.R. Martin, autor de la saga de libros adaptada con éxito a televisión bajo el nombre de Juego de Tronos. Elden Ring es un juego de mundo abierto, que presumiblemente sigue a rajatabla los mandamientos de la serie creada por Hidetaka Miyazaki, y que está ambientado en la fantasía oscura occidental y que proponen una mirada más profunda del RPG en tercera persona.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="image_2"><img src="images/214548.jpg"></div>
                        <div class="price_text">Price $ <span style="color: #3a3a38;">69</span></div>
                        <h1 class="game_text">Stray  PlayStation 5</h1>
                        <p class="long_text">Stray es un videojuego de acción y aventuras en tercera persona protagonizado por un gato ambientado en los callejones iluminados por el neón de una ciberciudad decadente y sus turbios rincones.</p>
                    </div>

                </div>
            </div>

        </div>


    </div>
    <div class="product_section layout_padding">
            <div class="container">
            <div class="product_text">Juegos de <span style="color: #5ca0e9;">Xbox </span></div>
                <p class="long_text">Únete a la diversión y juega a una extensa colección de atractivos títulos gratuitos en Xbox. Hay juegos de disparos, de estrategia, MMORPG de fantasía y muchos más. Todos los jugadores de Xbox pueden acceder al modo multijugador online de forma gratuita para jugar a títulos en su consola.</p>
                <div class="product_section_2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/fifa22-xsx.png"></div>
                            <div class="price_text">Price $ <span style="color: #3a3a38;">40</span></div>
                            <h1 class="game_text">FIFA 22 – Xbox Series</h1>
                            <p class="long_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem</p>
                        </div>
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/r6-xboxone-800x800.png"></div>
                            <div class="price_text">Price $ <span style="color: #3a3a38;">300</span></div>
                            <h1 class="game_text">Tom Clancy’s Rainbow Six Siege – Xbox One</h1>
                            <p class="long_text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product_section layout_padding">
            <div class="container">
            <div class="product_text">Juegos de <span style="color: #5ca0e9;">Nintendo</span></div>
                <p class="long_text"></p>
                <div class="product_section_2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/71awpZg2mL._SL1500_-800x888.jpg"></div>
                            <div class="price_text">Price $ <span style="color: #3a3a38;">69</span></div>
                            <h1 class="game_text">Doom The Classics Collection Nintendo Switch</h1>
                            <p class="long_text">Doom The Classics Collection – Juego físico para Nintendo Swith.
Esto incluye tres juegos clásicos DOOM conservados en un cartucho: DOOM, DOOM II y DOOM 3. No requiere descargas de juegos.
Incluye un manual a todo color y una cubierta reversible.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="image_2"><img src="images/crashbandicoot-switch-800x800.jpg"></div>
                            <div class="price_text">Price $ <span style="color: #3a3a38;">59</span></div>
                            <h1 class="game_text">Crash Bandicoot N. Sane Trilogy  Nintendo Switch</h1>
                            <p class="long_text"></p>
                        </div>
                    </div>
                </div>
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