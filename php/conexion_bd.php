<?php

   // $conexion = mysqli_connect("https://scrumsales.cl/phpmyadmin/", "scrumsal_Register", "nHfDSSQag", "scrumsal_Register");
$conexion = mysqli_connect("localhost", "root", "", "scrumsales_dev");
    if (isset($conexion)){
    echo 'base de datos conectada';
    }else{
        echo 'imposible conectar';
    }
?>

