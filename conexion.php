<?php

	function conexion(){

	$host = "dpg-d2nmboruibrs73f5ekjg-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "dbname=exampledbnube2_706n";
	$user = "user=exampledbnube2_706n_user";
	$password = "password=Y2sH4BZycoqYQ5qc6uurhxF7mPI7B3VL";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>