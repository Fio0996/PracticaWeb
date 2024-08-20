<?php include_once 'layoutHome.php';
include_once '../Controller/registrosController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php head(); ?>

<body class="hold-transition sidebar-mini" data-background-color="light">
    <div class="wrapper">
        <?php mostrarNavBar(); ?>
        <?php mostrarSideBar(); ?>

        <!-- Contenido principal -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container">
                    <div class="row justify-content-center mt-">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title text-center" style="margin-top: 65px;">Consulta de productos</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered" style="margin: auto;">
                                            <thead>
                                                <tr>
                                                    <th>Código Compra</th>
                                                    <th>Precio</th>
                                                    <th>Saldo</th>
                                                    <th>Descripción</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                ConsultarDatos();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Fin del contenido principal -->

        <!-- Barra lateral de control -->
        <aside class="control-sidebar control-sidebar-dark">

        </aside>
        <!-- Fin de la barra lateral de control -->
    </div>

    <?php scripts(); ?>

</body>

</html>