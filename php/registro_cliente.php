<?php 

    include 'conexion_bd.php';


    /** ASIGNA VARIABLES DE REGISTRO CLIENTE */
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $correo = $_POST['Correo'];
    $telefono = $_POST['Telefono'];
    $clave = $_POST['Contraseña'];
    
    /* INSERTA REGISTROS EN TABLA DE BASE DE DATOS */
    $query = "INSERT INTO registro_cliente (nombre, apellido, correo, telefono, clave) 
              VALUES('$nombre', '$apellido', '$correo', '$telefono', '$clave')";
    
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar){
        header("Location: http://127.0.0.1:5500/html/Registro_exitoso.html");
        //header("Location: http://127.0.0.1:5500/html/Registro_exitoso.html");
    }else{
        header("Location: http://127.0.0.1:5500/html/Registro_exitoso.html");
    }
    

?>