<?php
$listCategoria = \Controllers\InventarioController::listarCategoriaAccesorio();
$listAccesorio = \Controllers\InventarioController::listarAccesorio(); //;

?>

<div class="container col-11 mt-3">
    <h1>Inventarios</h1>
</div>

<section class="containerNav">
    <div class="container col-11 mt-3">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="inAccesorios">Accesorios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="inMaterial">Materia Prima</a>
            </li>
        </ul>
    </div>
</section>


<!--====================== TABLA LISTA ACCESORIOS========================-->

<div class="container col-11 mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-group-divider align-center" id="tblAccesorio">
                        <thead>

                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Accesorio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Acción</th>
                            </tr>

                        </thead>



                        <!--====================== LISTA ACCESORIOS DINAMICA=========================-->



                        <div class=" col-12">
                            <?php if (sizeof($listAccesorio) > 0) : ?>
                                <?php foreach ($listAccesorio as $accesorio) : ?>
                                    <tbody>
                                        <tr>
                                            <td scope="row"><?= $accesorio['idAccesorio']; ?></td>
                                            <td><?= $accesorio['nombreCategoriaA']; ?></td>
                                            <td><?= $accesorio['nombreAccesorio']; ?></td>
                                            <td><?= $accesorio['cantidadStockA']; ?></td>
                                            <td><?= $accesorio['precioUnidadA']; ?></td>
                                            <td><?= $accesorio['fechaA']; ?></td>
                                            <td>
                                                <a href='#' class="btn btn-small btn-primary "><i class=' bx bx-edit-alt'></i> </a>
                                                <a href="#" class="btn btn-small btn-danger"><i class='bx bx-trash icon'></i></a>

                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>


                    </table>
                </div>
            </div>
        </div>

        <!--====================== INSERTAR ACCESORIOS=========================-->

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class=" col-12 text-center">
                            <h3>Nuevo Accesorio</h3>
                        </div>

                        <div class="col-12">
                            <form method="post" action="" class="justify-content-right">

                                <div class="mb-3">
                                    <label for="" class="form-label">Categoria</label>
                                    <select class="form-control">
                                        <?php if (sizeof($listCategoria) > 0) : ?>
                                            <?php foreach ($listCategoria as $categoria) : ?>
                                                <option><?= $categoria['nombreCategoriaA']; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="accesorio">Nombre Accesorio</label>
                                    <input type="text" name="accesorio" id="accesorio" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="cantidad">Cantidad</label>
                                    <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="precio">Precio</label>
                                    <input type="number" name="precio" id="precio" class="form-control" min="1" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Añadir Accesorio </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>