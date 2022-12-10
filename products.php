<?php 

if (session_status() == PHP_SESSION_NONE)
session_start();

include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\Controller\ClientesController.php';

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
    <!-- banner section start -->
    <!-- product section start -->
    <div class="col-md-12 margin-bottom-15">
        <div class="col-md-12 margin-bottom-15">

        <?php
            if ($_GET["q"] == 1)
                 echo "<h1>Consolas Play Station</h1>";
            elseif($_GET["q"] == 2)
                 echo "<h1>Juegos Ps 4</h1>";
            elseif($_GET["q"] == 3)
                echo "<h1>Juegos Ps 5</h1>";
            elseif($_GET["q"] == 4)
                echo "<h1>Consolas Xbox</h1>";
            elseif($_GET["q"] == 5)
                echo "<h1>Juegos Xbox</h1>";
            elseif($_GET["q"] == 6)
                echo "<h1>PC Gamer</h1>";
            elseif($_GET["q"] == 7)
            echo "<h1>Juegos PC</h1>";
        ?>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>

                    </tr>
                </thead>
                <tbody>
                    <?php
                       CargarProductos($_GET["q"]);
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

<script>

function addProduct(id_producto)
{

    $.ajax({
        url:"Controller/ClientesController.php",
        type:"POST",
        data: { 
                "btnAddProduct" : "btnAddProduct", 
                "id_producto" : id_producto
              },
        success:function(data){
            //window.location.href = "mantUsuarios.php";
        },
    });

}

</script>
