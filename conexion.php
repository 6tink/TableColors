<?php

$link = 'mysql:host=localhost;dbname=yt_colores';
$usuario = 'root';

try{

    $pdo = new PDO($link, $usuario);

    //echo 'Conectado';

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}