<?php

namespace Controllers;

use Models\Inventario;

class InventarioController
{
    /**
     * Listar la categoriaAccesorio
     *
     * @return array
     */
    public static function listarCategoriaAccesorio(): array
    {
        return Inventario::categoriaAccesorio();
    }


    /**
     * listar accesorios
     */

    public static function listarAccesorio(): array
    {
        return Inventario::accesorio();
    }


    /**
     * listar categoria materia_prima
     */

    public static function listarCategoriaMaterial(): array
    {
        return Inventario::categoriaMaterial();
    }

    /**
     * listar categoria materia_prima
     */

    public static function listarMaterial(): array
    {
        return Inventario::material();
    }
}
