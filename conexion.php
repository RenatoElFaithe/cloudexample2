<?php
function conexion(){
    $conn_string = "host=dpg-d2nmboruibrs73f5ekjg-a.oregon-postgres.render.com ".
                   "port=5432 ".
                   "dbname=exampledbnube2_706n ".
                   "user=exampledbnube2_706n_user ".
                   "password=Y2sH4BZycoqYQ5qc6uurhxF7mPI7B3VL ".
                   "sslmode=require";

    $db = pg_connect($conn_string);

    if (!$db) {
        die("Error de conexión: " . pg_last_error());
    }
    return $db;
}
?>
