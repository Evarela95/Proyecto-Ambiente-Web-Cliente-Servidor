<?php

 function headerLogin()
 {
   echo '<title>Título</title>
         <meta name="keywords" content="" />
         <meta name="description" content="" />
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
         <link href="View/css/font-awesome.min.css" rel="stylesheet" type="text/css">
         <link href="View/css/bootstrap.min.css" rel="stylesheet" type="text/css">
         <link href="View/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
         <link href="View/css/bootstrap-social.css" rel="stylesheet" type="text/css">	    
         <link href="View/css/templatemo_style.css" rel="stylesheet" type="text/css">';
 }

function headerSite()
{
    echo '
    
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">';
      
}

function headerSection() 
{

    include_once __DIR__ . '\Controller\ClientesController.php';
  echo '
  <!-- header section start -->
    <div class="header_section"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
            <div class="logo"><a href="index.php"><img src="images/justgame.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                   
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 PRODUCTOS
       </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <div class="dropdown-item" href=""><img src="images/ps-logo-de-juegos.png" alt="Imagen">PLAY STATION</div>
                 <a class="dropdown-item" href="products.php?q=1">CONSOLAS PS</a>
                 <a class="dropdown-item" href="products.php?q=2">JUEGOS PS4</a>
                 <a class="dropdown-item" href="products.php?q=3">JUEGOS PS5</a> 

                 <div class="dropdown-item" href=""><img src="images/logotipo-de-xbox.png" alt="Imagen">XBOX</div>
                 <a class="dropdown-item" href="products.php?q=4">CONSOLAS XBOX</a>
                 <a class="dropdown-item" href="products.php?q=5">JUEGOS XBOX</a>
          

                 <div class="dropdown-item" href="" none><img src="images/videojuego.png" alt="Imagen none">COMPUTADORAS</div>
                 <a class="dropdown-item" href="products.php?q=6">PC GAMER</a>
                 <a class="dropdown-item" href="products.php?q=7">JUEGOS PC</a>
                 
   </div>
       </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">NOSOTROS</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">INGRESAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">REGISTRARSE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ADMINISTRACION.php">ADMINISTRACION</a>
                    </li>';

                    if(isset($_SESSION["sesionId"]))
                    {
                      echo '<li class="nav-item">
                          <a class="nav-link" href="EditarPerfilUsuario.php">PERFIL</a>
                       </li>';
                    }
                    
                    if(isset($_SESSION["sesionId"]))
                    {
                    echo '<li class="nav-item">
                        <a class="nav-link" href="Cart.php">CARRITO</a>
                        </li>';}
                     
                     
                    
                      if(isset($_SESSION["sesionId"]))
                      {
                       
                    echo ' <li class="nav-item">
                     <a class="nav-link"<i class="fa fa-sign-out" href="cerrarsesion.php">Cerrar Sesion</a></i>
                     </li>';
                     
                      } echo'
                     
                     </ul>
                     
                </div>';
                

                echo'
         </div>
            
         

          </nav>
    </div>';
}
 
function footerSection(){
  echo '
  <div class="section_footer ">
  <div class="container">
      <div class="footer_section_2">
          <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Dirección</h2>
                  <p class="ipsum_text_2">San José, Costa Rica</p>
                  <p class="ipsum_text_2">Código Postal: 20102</p>
                  <p class="ipsum_text_2" >Mapa del sitio: </p>
                  <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62879.67874264519!2d-84.14845052640717!3d9.935628367376324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e342c50d15c5%3A0xe6746a6a9f11b882!2zU2FuIEpvc8Op!5e0!3m2!1ses!2scr!4v1664489498913!5m2!1ses!2scr"
                      width="250" height="225" style="border:0;" allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Contacto</h2>
                  <p class="ipsum_text_2">Tel: 2442 3232</p>
                  <p class="ipsum_text_2">Correo: info@justgame.com</p>
              </div> 
              <div class="col-sm-6 col-md-6 col-lg-3">
              <h2 class="account_text">Mas informacion</h2>
              <p class="ipsum_text_2" >Sobre nosotros</p>
              <p class="ipsum_text_2" >Metodos de Pago</p>
              <p class="ipsum_text_2" >Tiendas</p>
              <p class="ipsum_text_2" >Términos & Condiciones</p>
              <p class="ipsum_text_2" >Cuenta</p>
              <p class="ipsum_text_2" >Contacto</p>
              </div>
          </div>           
          </div>
      </div>
      <div class="social_icon">
          <ul>
              <li><a href="#"><img src="images/fb-icon.png"></a></li>
              <li><a href="#"><img src="images/twitter-icon.png"></a></li>
              <li><a href="#"><img src="images/linkdin-icon.png"></a></li>
              <li><a href="#"><img src="images/instagram-icon.png"></a></li>
          </ul>
      </div>
  </div>
</div>';
}

function copyRightSection(){
    echo 
    '<div class="copyright_section">
    <div class="container">
    <p class="copyright_text">Copyright 2022 JUSTGAME, TODOS LOS DERECHOS RESERVADOS.</p>
    </div>';

}

function jsSection(){

    echo '<script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
';
}



function modal()
  {
    
    include_once __DIR__ . '\Controller\UtilidadesController.php';

    echo '<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>¿Está seguro que quiere cerrar sesión?</h4>
              </div>
              <div class="modal-footer">
                <form action="" method="post">
                  <input type="submit" value="Sí" id="btnCerrar" name="btnCerrar" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
        </div>';

  }













?>