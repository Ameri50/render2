<?php

function conexion(){

$host = "host=dpg-cr6bdj1u0jms73bn1teg-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=dbtest_h0hy";
$user = "user=dbtest_h0hy_user";
$password = "password=xkmD4V6rmoGNJ27uGLq1k76ynORQ8HTd";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>