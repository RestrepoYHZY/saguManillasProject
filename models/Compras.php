<?php
//declarar
namespace Models;

use DB\Conexion;  //LLAMAR A LA CONCEXION DE DB

class Compras
{
    /**
     * Obtener comprar de la bd
     *
     * @return array
     */
    //
    public static function Compras(): array
    {
        $stmt = Conexion::conectar()->prepare(
            "select rc.idRegistro_compra, m.Nombre as NombreMaterial, cm.Cantidad,  rc.Fecha, cm.MontoTotal
        from registro_compra as rc inner join  compra_materia_prima as cm on rc.idRegistro_Compra = cm.idRegistro_Compra
        inner join materia_prima as m on m.idMateriaPrima where cm.idMateriaPrima = m.idMateriaPrima;"
        );
        $stmt->execute(); //Ejecutar la consulta 
        $retorno = $stmt->rowCount() > 0 ? $stmt->fetchAll() : []; // rowCountcuanta las finas que retorna la consulta luego operador ternario para verdadero retorno lista, false array vacio.
        $stmt->closeCursor(); //cerrar la conexion 
        return $retorno; //retornar 


    }
}
