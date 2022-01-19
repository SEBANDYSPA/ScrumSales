<?php

include_once 'conexion_bd.php';

class Clientes extends DB{
    
    function obtenerClientes(){
        $query = $this -> connect() -> query('SELECT * FROM registro_cliente');

        return $query;
    }

}

?>