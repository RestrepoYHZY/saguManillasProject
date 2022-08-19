<?php

namespace Models;

use DB\Conexion;

class Inventario
{
    public static function categoriaAccesorio(): array
    {
        $stmt = Conexion::conectar()->prepare("SELECT Nombre FROM categoria_producto;");
        $stmt->execute();
        $retorno = $stmt->rowCount() > 0 ? $stmt->fetchAll() : [];
        $stmt->closeCursor();
        return $retorno;
    }

    //listarAccesorio

    public static function accesorio(): array
    {
        $stmt = Conexion::conectar()->prepare(
            "select i.idInventario,  cp.Nombre as NombreC,  p.Nombre, i.Cantidad, i.ValorUnitario
            from inventario as i inner join producto as p on i.idProducto=p.idProducto
            inner join categoria_producto as cp on cp.idCategoria_producto = p.idCategoria_producto;"
        );
        $stmt->execute();
        $retorno = $stmt->rowCount() > 0 ? $stmt->fetchAll() : [];
        $stmt->closeCursor();
        return $retorno;
    }

    //listar la categoria de la materia_prima

    public static function categoriaMaterial(): array
    {
        $stmt = Conexion::conectar()->prepare("SELECT Nombre FROM categoria_materia_prima;");
        $stmt->execute();
        $retorno = $stmt->rowCount() > 0 ? $stmt->fetchAll() : [];
        $stmt->closeCursor();
        return $retorno;
    }

    //listar los materiales

    public static function material(): array
    {
        $stmt = Conexion::conectar()->prepare(
            "select i.idInventario, i.Cantidad, i.ValorUnitario, mp.Nombre, mp.color
            from inventario as i inner join materia_prima as mp on i.idMateriaPrima=mp.idMateriaPrima;"
        );
        $stmt->execute();
        $retorno = $stmt->rowCount() > 0 ? $stmt->fetchAll() : [];
        $stmt->closeCursor();
        return $retorno;
    }
}
