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
            "select rv.idRegistro_venta, concat(c.Nombre, ' ', c.Apellido) as nombreCliente, a.nombreAccesorio, dv.cantidadVenta, rv.fechaVenta
        from registro_venta as rv inner join cliente as c on rv.idCliente=c.idCliente
        inner join accesorio as a
        inner join detalle_venta as dv on a.idAccesorio= dv.idAccesorio; "
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
