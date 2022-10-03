<?php include_once 'generales.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php headerSite(); ?>
</head>

<body>
<?php headerSection(); ?>

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
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- footer section start -->
    <?php footerSection(); ?>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
        <p class="copyright_text">Copyright 2022</p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });
    </script>
</body>

</php>