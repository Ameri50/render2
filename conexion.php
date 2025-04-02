<?php

function conexion() {
    $host = "host=ddpg-cvmpjc7diees73bpro8g-a";
    $port = "port=5432";
    $dbname = "dbname=test_m6ty";
    $user = "user=rojas";
    $password = "password=VT9jKLUtEu0QpUKrVzJz1m6sobuU3ov7";

    $db = pg_connect("$host $port $dbname $user $password");

    if (!$db) {
        die("Error: No se pudo conectar a la base de datos.");
    }

    return $db;
}
?>