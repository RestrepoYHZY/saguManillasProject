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
}
