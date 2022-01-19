<?php 

    include_once 'apiclientes.php';

    $api = new ApiClientes();

    if(isset($_POST['nombre'])){
        // Insertar datos
        $item = array (
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'correo' => $_POST['correo'],
            'telefono' => $_POST['telefono'],
            'clave' => $_POST['clave']
         );
        // Todo los datos desde registo.html va en el array y lo añade a $item 
        $api -> add($item);

    }else{
        $api->error('Error al llamar la API');
    }   


?>