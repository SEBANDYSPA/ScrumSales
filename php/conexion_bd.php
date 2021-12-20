<?php

   // $conexion = mysqli_connect("https://201.148.105.104/phpmyadmin/", "scrumsales_dev", "2Z4w6USXZ", "registro_cliente");
    $conexion = mysqli_connect("localhost", "root", "", "scrumsales_dev");

    if ($conexion == true) {
        echo'<script type="text/javascript">
        alert("¡Registrado exitosamente!");
        window.location.href="../html/index.html";
        </script>';
    } else {
        echo'<script type="text/javascript">alert("Error al registrarse");
        window.location.href="index.html";
        </script>';

    }

?>