<?php

include_once 'cliente.php';

class ApiClientes{
    
    function getAll(){
        $cliente = new Clientes();
        $clientes = array();
        $clientes["items"] = array();

        $res = $cliente->obtenerClientes();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['id'],
                    "nombre" => $row['nombre'],
                    "apellido" => $row['apellido'],
                    "correo" => $row['correo'],
                    "telefono" => $row['telefono'],
                    "clave" => $row['clave'],
                
                );
                array_push($clientes["items"], $item);
            }
        
            echo json_encode($clientes);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}

?>