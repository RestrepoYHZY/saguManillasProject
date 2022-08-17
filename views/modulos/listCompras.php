<?php

namespace ComprasController;
//Peticion al controlador
$compras = \Controllers\ComprasController::listarCompras();
//nombre pagina y lugar donde se estan listo en modelos

var_dump($compras);
?>



<div id="content">
    <section>
        <div class="container col-10 mt-3">
            <h1>Registro de Compras</h1>
        </div>
    </section>

    <section class="containerNav">
        <div class="container col-10 mt-3">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="registrar-compra">Nueva Compra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="listCompras">Listado de compras</a>
                </li>
            </ul>
        </div>
    </section>


    <!--======================Lista de Compras=========================-->


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
                                <h4>Material</h4>
                            </div>
                            <div class="col-lg-2 stat ">
                                <h4>Cantidad</h4>
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


        <!--======================Lista de Compras Dinamica=========================-->
        <?php if (sizeof($compras) > 0) : ?>
            <?php foreach ($compras as $compra) : ?>
                <section class="containerPeople mt-2">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <h5><?= $compra['idRegistro_compra']; ?></h5>
                                    </div>
                                    <div class="col-lg-2  ">
                                        <h5><?= $compra['NombreMaterial']; ?></h5>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <h5><?= $compra['Cantidad']; ?></h5>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <h5><?= $compra['Fecha']; ?></h5>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <h5><?= $compra['MontoTotal']; ?></h5>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="#" class=" btn btn-small btn-danger"><i class='bx bx-trash icon'></i> Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
        <?php endif; ?>



    </div>