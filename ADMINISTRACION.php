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

    <?php 
    headerSection(); 
    ?>

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
    <div class="row">
        <div class="col-md-12 margin-bottom-15">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Primer apellido</th>
                        <th>Segundo apellido</th>
                        <th>Usuario</th>
                        <th>Correo Electrónico</th>
                        <th>Estado</th>
                        <th>Tipo Usuario</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                                CargarUsuarios();
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

    <!-- Modal -->
    <div class="modal fade" id="DeleteUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>¿Está seguro que quiere inactivar el usuario?</h4>
                </div>
                <div class="modal-footer">

                    <input type="hidden" id="userId" name="userId" value="" />

                    <input type="button" class="btn btn-primary" value="SI" id="btnInactivar" name="btnInactivar"
                        onclick="InactivarUsuario()">

                </div>
            </div>
        </div>
    </div>

    <script src="js/usuarios.js"></script>';

</body>
</php>