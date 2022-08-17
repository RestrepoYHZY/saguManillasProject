<section>
    <div class="container col-10 mt-3">
        <h1>Registro de Compras</h1>
    </div>
</section>

<section class="containerNav">
    <div class="container col-10 mt-3">
        <ul class="nav nav-tabs font-weight-bold">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="registrar-compra">Nueva Compra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listCompras">Listado de compras</a>
            </li>
        </ul>
    </div>
</section>

<div class="contenedorAll col-11 mt-4 ml-5">
    <!--===============================================-->
    <div class="contenedorDatos mt-4 pl-5">
        <div class="row">
            <div class="col-md-4">


                <!--===================Datos Material============================-->
                <div class="contenedorProducto">

                    <div class="card" style="width: 38rem;">
                        <div class="card-body">
                            <h5 class="card-title">Material</h5>
                            <form>
                                <div class="row mb-3">
                                    <label for="inputCategoria" class="col-sm-2 col-form-label">Categoria</label>
                                    <div class="col-sm-10">
                                        <select class="form-control">
                                            <option>Hilo</option>
                                            <option>Cadena</option>
                                            <option>Dijes</option>
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
                                    <label for="inputCodigo" class="col-sm-2 col-form-label ">Código</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputCodigo">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputCodigo" class="col-sm-2 col-form-label ">Color</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputCodigo">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputCantidad" class="col-sm-2 col-form-label  ">Cantidad</label>
                                    <div class="col-sm-10 ">
                                        <input type="Number" id="inputCantidad" min="1" max="100">
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>

                </div>



            </div>



            <!--================Vista previa=================-->
            <div class="contenedorResumen col-5 ml-5 pl-5  ">
                <div class="row ml-5">
                    <div class="col-md-4 ml-5">
                        <div class=" card" style="width: 40rem;">
                            <div class="card-body">
                                <h5 class="card-title">Datos de la Venta</h5>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Numero Compra</td>
                                            <td>aaa1</td>
                                        </tr>

                                        <tr>
                                            <td>Fecha</td>
                                            <td>09/07/2022</td>
                                        </tr>
                                        <tr class="espacio">
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="espacio">
                                            <td>Nombre Material</td>
                                            <td>Lunar</td>
                                        </tr>

                                        <tr class="espacio">
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="espacio">
                                            <td>Cantidad</td>
                                            <td>1</td>
                                        </tr>


                                        <tr class="espacio">
                                            <td>Monto Total</td>
                                            <td>1000</td>
                                        </tr>



                                    </tbody>
                                </table>
                                <a href="listVentas" class="btn btn-primary">Registrar Compra</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>