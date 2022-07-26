<?php

use Models\Ventas;

$ventas = \Controllers\ventasController::listarVentas();

?>


<div id="content">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Registro de Ventas</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="containerNav">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="registrar-venta">Nueva Venta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="listventas">Listado de ventas</a>
                </li>
            </ul>
        </div>
    </section>

    <div class="col-12 mt-3 ">
        <section class=" containerList">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-2 stat ">
                                <h4>Codigo</h4>
                            </div>
                            <div class="col-lg-2 stat">
                                <h4>Cliente</h4>
                            </div>
                            <div class="col-lg-2 stat ">
                                <h4>Producto</h4>
                            </div>
                            <div class="col-lg-2 stat ">
                                <h4>Fecha</h4>
                            </div>
                            <div class="col-lg-2 stat ">
                                <h4>Total</h4>
                            </div>
                            <div class="col-lg-2">
                                <h4>Acción</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php if (sizeof($ventas) > 0) : ?>
            <?php foreach ($ventas as $venta) : ?>
                <section class="containerPeople mt-2">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2  fs-3 ">
                                        <h5><?= $venta['idRegistro_venta']; ?></h5>
                                    </div>
                                    <div class="col-lg-2  ">
                                        <h5><?= $venta['NombreC']; ?></h5>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <h5><?= $venta['Nombre'] ?></h5>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <h5><?= $venta['Fecha'] ?></h5>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <h5>$ <?= $venta['MontoTotal']; ?></h5>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="#" class=" btn btn-danger" onclick="return eliminarVenta()"><i class='bx bx-trash icon'></i> Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
        <?php endif; ?>



    </div>