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
    <section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center">Lista de compras</h3>
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:60%">Productos</th>
                        <th style="width:12%">Precio</th>
                        <th style="width:10%">Cantidad</th>
                        <th style="width:16%"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    CargarCarrito();
                    ?>

                </tbody>
            </table>
            <div class="float-right text-right">
                <h4>Subtotal:</h4>
                <?php
                    CargarTotal();
                    ?> 
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a href="Cart.php" id="Eliminar" name="Eliminar" class="btn btn-danger mb-4 btn-lg pl-5 pr-5">VACIAR</a>
            <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">PAGAR</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="catalog.html">
            <a class="nav-link" href="index.php">CONTINUAR COMPRANDO</a>
        </div>
    </div>
</div>
</section>

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