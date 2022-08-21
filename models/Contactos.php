<?php

namespace Models;

use DB\Conexion;

class Contactos
{
    /**
     * Listar los clientes
     *
     * @return array
     */

    public static function listarClientes(): array
    {
        $stmt = Conexion::conectar()->prepare("select idCliente, concat(nombre, ' ', apellido) as  nombreCliente, telefono, direccion from cliente;");
        $stmt->execute();
        $retorno = $stmt->rowCount() > 0 ? $stmt->fetchAll() : [];
        $stmt->closeCursor();
        return $retorno;
    }



    public static function crearCliente(array $datos)
    {
        $conexion = Conexion::conectar();
        $insert = $conexion->prepare("INSERT INTO cliente (Nombre,Apellido, Telefono, Direccion) 
        VALUES ( :nombre, :apellido, :telefono,:direccion)
        ");
        $insert->bindParam(":nombre", $datos['nombre']);
        $insert->bindParam(":apellido", $datos['apellido']);
        $insert->bindParam(":telefono", $datos['telefono']);
        $insert->bindParam(":direccion", $datos['direccion']);
        $insert->execute();
        $idInsert = $conexion->lastInsertId();
        $retorno = $idInsert != 0 ? $idInsert : 0;
        $insert->closeCursor();
        return $retorno;
    }
}
