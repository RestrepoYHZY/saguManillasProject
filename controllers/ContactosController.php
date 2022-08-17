<?php

namespace Controllers;

use Models\Contactos;

class ContactosController
{
    /**
     * Obtener lista de usuarios del models
     *
     * @return array
     */
    public static function listarClientes(): array
    {
        return Contactos::listarClientes();
    }



    public static function registrarCliente()
    {
        if (
            isset($_POST['nombre']) && strlen($_POST['nombre']) > 0 &&
            isset($_POST['apellido']) && strlen($_POST['apellido']) > 0 &&
            isset($_POST['telefono']) && strlen($_POST['telefono']) > 0 &&
            isset($_POST['direccion']) && strlen($_POST['direccion']) > 0


        ) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];

            $datos = [
                'nombre' => $nombre,
                'apellido' => $apellido,
                'telefono' => $telefono,
                'direccion' => $direccion,

            ];

            $registrar = Contactos::crearCliente($datos);
            // var_dump($registrar);
            if ($registrar > 0) {
                echo "Cliente registrado con Exito";
                echo "
                <script>
                setTimeout(() => {
                    window.location = 'clientes'
                }, 300);
                </script>
                ";
            } else {
                echo "Problemas al registrar el Cliente";
            }
        }
    }
}
