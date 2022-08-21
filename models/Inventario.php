<?php

namespace Models;

use DB\Conexion;

class Inventario
{
    public static function categoriaAccesorio(): array
    {
        $stmt = Conexion::conectar()->prepare("SELECT nombreCategoriaA FROM categoria_accesorio;");
        $stmt->execute();
        $retorno = $stmt->rowCount() > 0 ? $stmt->fetchAll() : [];
        $stmt->closeCursor();
        return $retorno;
    }

    //listarAccesorio

    public static function accesorio(): array
    {
        $stmt = Conexion::conectar()->prepare(
            "select a.idAccesorio, ca.nombreCategoriaA, a.nombreAccesorio, a.cantidadStockA, a.precioUnidadA, a. fechaA
            from accesorio as a inner join categoria_accesorio as ca on a.idCategoria_accesorio= ca. idCategoria_accesorio; "
        );
        $stmt->execute();
        $retorno = $stmt->rowCount() > 0 ? $stmt->fetchAll() : [];
        $stmt->closeCursor();
        return $retorno;
    }

    //listar la categoria de la materia_prima

    public static function categoriaMaterial(): array
    {
        $stmt = Conexion::conectar()->prepare("SELECT nombreCategoriaM FROM categoria_materia_prima;");
        $stmt->execute();
        $retorno = $stmt->rowCount() > 0 ? $stmt->fetchAll() : [];
        $stmt->closeCursor();
        return $retorno;
    }

    //listar los materiales

    public static function material(): array
    {
        $stmt = Conexion::conectar()->prepare(
            "select m.idMateria_prima, c.nombreCategoriaM, m.nombreMaterial, m.color, m.cantidadStockM, m. precioUnidadM, m.fechaM
            from materia_prima as m inner join categoria_materia_prima as c on m.idCategoria_materia_prima = c.idCategoria_materia_prima;"
        );
        $stmt->execute();
        $retorno = $stmt->rowCount() > 0 ? $stmt->fetchAll() : [];
        $stmt->closeCursor();
        return $retorno;
    }
}
