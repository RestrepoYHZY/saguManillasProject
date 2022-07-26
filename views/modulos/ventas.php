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
            <ul class="nav nav-tabs font-weight-bold">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="registrar-venta">Nueva Venta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listVentas">Listado de ventas</a>
                </li>
            </ul>
        </div>
    </section>


    <!--===============================================-->

    <div class="contenedorTodo">

        <section class="containerCliente ">
            <div class="card" style="width: 38rem;">
                <div class="card-body">
                    <h5 class="card-title">CLIENTE <i class='bx bx-message-square-add icon' title="Nuevo Cliente "></i></h5>
                    <form>
                        <div class="row mb-3">
                            <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                                    <option selecte>Cliente 1</option>
                                    <option value="1">Cliente 2</option>
                                    <option value="2">Cliente 3</option>
                                    <option value="3">Cliente 4</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputtext" class="col-sm-2 col-form-label ">Cédula</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputcc">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputtel" class="col-sm-2 col-form-label ">Telefono</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputtel">
                            </div>
                        </div>


                    </form>

                </div>
            </div>


        </section>

        <div class="contenedor">
            <section class="containerProducto">
                <div class="card" style="width: 38rem;">
                    <div class="card-body">
                        <h5 class="card-title">PRODUCTO</h5>
                        <form>
                            <div class="row mb-3">
                                <label for="inputNombre" class="col-sm-2 col-form-label">Producto</label>
                                <div class="col-sm-10">
                                    <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                                        <option selecte>Accesorio</option>
                                        <option value="1">Personalizado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputtext" class="col-sm-2 col-form-label ">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputcc">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputtel" class="col-sm-2 col-form-label ">Código</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputtel">
                                </div>
                            </div>

                            <form>
                                <div class="row mb-3">
                                    <label for="inputNombre" class="col-sm-2 col-form-label">Cantidad</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                                            <option selecte>1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                </div>

                            </form>

                    </div>
                </div>

            </section>

        </div>

        <!--=================================-->