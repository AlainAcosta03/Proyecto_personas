<?php

    $conexion = new mysqli ("localhost", "root", "", "escuela");
    if($conexion){
        echo "conexión exitosa";
    }else{
        echo "falló la conexión";
    }


?>