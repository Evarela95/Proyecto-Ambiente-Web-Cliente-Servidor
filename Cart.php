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
<form action="" method="POST">
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
        <div class="product_text" style="color: #5ca0e9;">Lista de compras
                </div>
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

                Subtotal: ₡ <?php echo number_format(CargarImpuesto());?><br/>
                Total: ₡ <?php echo number_format(CargarTotal());?>
                
                <input type="hidden" name="txtTotal" value="<?php echo CargarTotal();?> ">
                
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <input type="submit" id="btnEliminar" name="btnEliminar" class="btn btn-danger mb-4 btn-lg pl-5 pr-5"
            value="VACIAR" />
            <input type="submit" id="btnPagar" name="btnPagar" class="btn btn-primary mb-4 btn-lg pl-5 pr-5" 
            value="PAGAR" />
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            
            <a button type="button" class="btn btn-success" href="index.php">CONTINUAR COMPRANDO</a>
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
                </form>
</body>
</html>
<script>

function JSSUMAR(id)
{
    $.ajax({
        url:"Controller/ClientesController.php",
        type:"POST",
        data: { 
                "sumar" : "sumar", 
                "id" : id
              },
        success:function(data){
            window.location.href = "Cart.php";
        }
    });
}

function JSRESTAR(id)
{
    $.ajax({
        url:"Controller/ClientesController.php",
        type:"POST",
        data: { 
                "restar" : "restar", 
                "id" : id
              },
        success:function(data){
            window.location.href = "Cart.php";
        }
    });
}

</script>
