<?php

namespace Controllers;
//indicar que se va user el modelo 
use Models\Compras;

class ComprasController
{
    /**
     * Obtener lista de compras  del models
     *
     * @return array
     */
    public static function listarCompras(): array //retona arreglo
    {
        //llamando al modelo
        return Compras::compras();
    }
}
