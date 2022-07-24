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
        $smtm = Conexion::conectar()->prepare("
        select rv.idRegistro_venta, c.Nombre as NombreCliente, p.Nombre, rv.Fecha,vp.MontoTotal 
        from registro_venta as rv inner join cliente as c on rv.idRegistro_venta=c.idCliente
        inner join producto as p on p.idProducto=rv.idRegistro_venta
        inner join venta_producto as vp on vp.idVenta_Producto = rv.idRegistro_venta;");
        $smtm->execute();
        $retorno = $smtm->rowCount() > 0 ? $smtm->fetchAll() : [];
        $smtm->closeCursor();
        return $retorno;
    }
}
