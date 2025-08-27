<?php
function conexion(){
    $host = "host=dpg-d2nmboruibrs73f5ekjg-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=exampledbnube2_706n";
    $user = "user=exampledbnube2_706n_user";
    $password = "password=Y2sH4BZycoqYQ5qc6uurhxF7mPI7B3VL";
    $ssl = "sslmode=require"; // Render necesita SSL

    $db = pg_connect("$host $port $dbname $user $password $ssl");

    if (!$db) {
        die("Error de conexión: " . pg_last_error());
    }
    return $db;
}
?>
