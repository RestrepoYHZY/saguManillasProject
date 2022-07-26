<?php

namespace Controllers;

use Models\Ventas;

class VentasController
{
    /**
     * obtener listar de ventas
     *
     * @return array
     */
    public static function listarVentas(): array
    {
        return Ventas::ventas();
    }

    public function registrarUsuario()
    {
        if (isset($_POST['cliente'])) {
            $cedulaC = $_POST['cedulaC'];
            $telefonoC = $_POST['telefonoC'];
            $producto = $_POST['producto'];
            $nameProducto = $_POST['nameProducto'];
            $idProducto = $_POST['idProducto'];
            $cantidad = $_POST['cantidad'];
        }
    }
}
