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
    <link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet'>

    <title>Sagu Manillas</title>

    <script src="views/plugins/bootstrap/jquery.slim.min.js"></script>
    <script src=" views/plugins/bootstrap/bootstrap.bundle.min.js"></script>
    <script src=" https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <div class="container-fluid navegador">
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrar-venta">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrar-compra">Compras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inAccesorios">Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clientes">Clientes</a>
                </li>
            </ul>
        </nav>


        <?php
        if (isset($_GET['ruta'])) {
            $rutas = explode('/', $_GET['ruta']);
            //var_dump($rutas);
            $ruta = $rutas[0];
            //echo "$ruta";
            if (

                $ruta == 'registrar-compra' ||
                $ruta == 'listCompras' ||
                $ruta == 'listVentas' ||
                $ruta == 'registrar-venta' ||
                $ruta == 'clientes' ||
                $ruta == 'inicio' ||
                $ruta == 'inAccesorios' ||
                $ruta == 'inMaterial'


            ) {
                include "modulos/{$ruta}.php";
            } else {
                include 'modulos/404.php';
            }
        }

        ?>

    </div>






</body>

</html>