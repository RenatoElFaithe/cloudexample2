<?php

	function conexion(){

	$host = "host=dpg-d2nmboruibrs73f5ekjg-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "exampledbnube2_706n";
	$user = "exampledbnube2_706n_user";
	$password = "exampledbnube2_706n_user";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>