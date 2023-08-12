<?php

function conectarDB() : mysqli {
    $db= mysqli_connect('192.168.1.26', 'root', 'test', 'bienesraices_crud');

    if(!$db){
        echo 'No Se conecto Mi Perro';
        exit;
    }
    return $db;
}