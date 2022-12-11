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
                 echo '<div class="product_text" style="color: #00008B;">Play Station </div>';
            elseif($_GET["q"] == 2)
            echo '<div class="product_text" style="color: #00008B;">Juegos PS4 </div>';
            elseif($_GET["q"] == 3)
            echo '<div class="product_text" style="color: #00008B;">Juegos PS5 </div>';
            elseif($_GET["q"] == 4)
            echo '<div class="product_text" style="color: #006400;"> Consolas Xbox</div>';    
            
            elseif($_GET["q"] == 5)
            echo '<div class="product_text" style="color: #006400;"> Juegos Xbox</div>';  
            elseif($_GET["q"] == 6)
            echo '<div class="product_text" style="color: #8B008B;"> PC Gamer</div>'; 
            elseif($_GET["q"] == 7)
            echo '<div class="product_text" style="color: #8B008B;"> Juegos PC</div>'; 
        ?>

            <table class="table table-bordered table-hover " style="text-align:center">
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

            </html>

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
