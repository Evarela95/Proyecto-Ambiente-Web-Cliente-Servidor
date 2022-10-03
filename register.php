<?php include_once 'generales.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php headerSite(); ?>
</head>

<body>
    <!-- header section start -->
    <?php headerSection(); ?>
    <!-- contact section start -->
    <div class="contact_section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="email_box">
                        <div class="input_main">
                            <div class="container">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Name" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Email" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="email-bt" placeholder="Password" name="Password">
                                    </div>
                                </form>
                            </div>
                            <div class="main_bt"><a href="#">REGISTRARSE</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_6"><img src="images/img-6.png"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
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