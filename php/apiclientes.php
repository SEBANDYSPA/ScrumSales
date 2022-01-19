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
    
    // añade datos desde registro_cliente.php
    function add($item){

        $cliente = new Clientes();

        $res = $cliente -> nuevoCliente($item);
        $this -> exito('Registrado con EXITO!!');
    }

    function error ($mensaje){
        echo json_encode(array('mensaje' => $mensaje));
    }
    
     function exito ($mensaje){
         echo json_encode(array('mensaje' => $mensaje));
        
    }

}

?>

<html>
<head>
<META HTTP-EQUIV="Refresh" CONTENT="2;url=http://127.0.0.1:5500/html/Registro_exitoso.html">
</head>
</html>