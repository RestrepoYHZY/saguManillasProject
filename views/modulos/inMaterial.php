<div class="container col-10 mt-3">
    <h1>Inventarios</h1>
</div>


<section class="containerNav">
    <div class="container col-10 mt-3">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link " href="inAccesorios">Accesorios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="inMaterial">Materia Prima</a>
            </li>
        </ul>
    </div>
</section>


<!--====================== TABLA LISTAR MATERIA PRIMA=========================-->

<div class="container col-10 mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-group-divider align-center">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Material</th>
                                <th scope="col">Color</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>



                        <!--====================== LISTA MATERIAL DINAMICA=========================-->



                        <div class=" col-12">
                            <tbody>
                                <td scope="row"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href='#' class="btn btn-small btn-primary"><i class=' bx bx-edit-alt'></i> </a>
                                    <a href="#" class="btn btn-small btn-danger "><i class='bx bx-trash icon'></i></a>

                                </td>
                                </tr>
                            </tbody>
                        </div>


                    </table>
                </div>
            </div>
        </div>

        <!--====================== INSERTAR MATERIA PRIMA=========================-->

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class=" col-12 text-center">
                            <h3>Nuevo Material</h3>
                        </div>

                        <div class="col-12 ">
                            <form method="post" action="" class="justify-content-right">

                                <div class="mb-3">
                                    <label for="" class="form-label">Materia Prima</label>
                                    <select class="form-control">
                                        <option>Hilo</option>
                                        <option>Ojo Turco</option>
                                        <option>Dijes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input type="text" name="color" id="color" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="cantidad">Cantidad</label>
                                    <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" max="100" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="precio">Precio</label>
                                    <input type="number" name="precio" id="precio" class="form-control" min="1" max="100" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Añadir Material </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>