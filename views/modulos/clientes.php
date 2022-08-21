<?php

$contactos = \Controllers\ContactosController::listarClientes();

// var_dump($contactos);


?>

<div class="container col-10 mt-3">
    <h1>Clientes</h1>
</div>

<!-- <section class="containerNav">
        <div class="container">
            <ul class="nav nav-tabs font-weight-bold">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="clientes">Clientes</a>
                </li>
            </ul>
        </div>
    </section>
</div> -->


<!--====================== TABLA DE CLIENTES=========================-->

<div class="container col-10 mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-group-divider align-center">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>



                        <!--====================== Añadir lista Dinamica=========================-->

                        <?php if (sizeof($contactos) > 0) : ?>
                            <?php foreach ($contactos as $contacto) : ?>

                                <div class=" col-12">
                                    <tbody>
                                        <td scope="row"><?= $contacto['idCliente']; ?></td>
                                        <td><?= $contacto['nombreCliente']; ?></td>
                                        <td><?= $contacto['telefono']; ?></td>
                                        <td><?= $contacto['direccion']; ?></td>
                                        <td>
                                            <a href='#' class="btn btn-small btn-primary"><i class=' bx bx-edit-alt'></i> </a>
                                            <a href="#" class="btn btn-small btn-danger "><i class='bx bx-trash icon'></i></a>

                                        </td>
                                        </tr>
                                    </tbody>
                                </div>

                            <?php endforeach; ?>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>

        <!--====================== Insertar=========================-->

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class=" col-12 text-center">
                            <h3>Nuevo Cliente</h3>
                        </div>

                        <div class="col-12">
                            <form method="post" action="" class="justify-content-right">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input type="text" name="telefono" id="telefono" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" name="direccion" id="direccion" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Añadir Cliente </button>
                                </div>
                            </form>
                            <?php
                            \Controllers\ContactosController::registrarCliente();

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>