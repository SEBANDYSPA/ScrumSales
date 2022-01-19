<?php

include_once 'conexion_bd.php';

class Clientes extends DB{
    
    function obtenerClientes(){
        $query = $this -> connect() -> query('SELECT * FROM registro_cliente');

        return $query;
    }

    function nuevoCliente($cliente){
        $query = $this -> connect() -> prepare('INSERT INTO registro_cliente (nombre, apellido, correo, telefono, clave) 
        VALUES (:nombre, :apellido, :correo, :telefono, :clave)');
        $query -> execute(
            ['nombre' => $cliente['nombre'],
             'apellido' => $cliente['apellido'],
             'correo' => $cliente['correo'],
             'telefono' => $cliente['telefono'],
             'clave' => $cliente['clave']
             ]
        );
    }

}

?>