<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="views/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Sagu Manillas</title>
</head>

<body>
    <div id="content">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h1>Registro de Ventas</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="containerNav">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="../newVenta/newVenta.html">Nueva Venta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../listaVenta/listVenta.html">Listado de ventas</a>
                    </li>
                </ul>
            </div>
        </section>

        <?php
        if (isset($_GET['ruta'])) {
            $ruta = explode('/', $_GET['ruta']);
            var_dump($rutas);
            //echo "$ruta";
        }
        ?>





        <script src="views/plugins/bootstrap/jquery.slim.min.js"></script>
        <script src=" views/plugins/bootstrap/bootstrap.bundle.min.js"></script>


</body>

</html>