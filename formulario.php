<?php

    $destino = "juan.crunge@gmail.com";
    $asunto = "Prueba";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $estudio = $_POST["estudio"];
    $opinion = $_POST["opinion"];
    $mensaje = "
        Mensaje de : ".$nombre."
        Correo :  ".$correo."
        sugerencias :  ".$estudio."
        Algo extra : ".$opinion"
    ";

    mail($destino, $asunto, utf8_decode($mensaje));

?>