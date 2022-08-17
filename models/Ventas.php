<?php

namespace Models;

use DB\Conexion;

class Ventas
{

    /**
     * lista de ventas
     *
     * @return array
     */
    public static function Ventas(): array
    {
        $smtm = Conexion::conectar()->prepare(
            "select rv.idRegistro_venta, c.Nombre as NombreC, p.Nombre, rv.Fecha,vp.MontoTotal
        from registro_venta as rv inner join cliente as c on rv.idCliente=c.idCliente
        inner join venta_producto as vp on vp.MontoTotal 
        inner join producto as p on p.idProducto= vp.idProducto
        where vp.idRegistro_venta=rv.idRegistro_venta;
     "
        );
        $smtm->execute();
        $retorno = $smtm->rowCount() > 0 ? $smtm->fetchAll() : [];
        $smtm->closeCursor();
        return $retorno;
    }

    public function crearVenta(array $datos)
    {
        $conexion = Conexion::conectar();
        $insert = $conexion->prepare("");
        $insert->execute();
    }
}
