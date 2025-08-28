<?php

	function conexion(){

	$host = "host=dpg-d2nmbpruibrs73f5els0-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "dbname=db1_q6hn";
	$user = "user=db1_q6hn_user";
	$password = "password=JKblEhD8zM2dXDDqDSVfOfBRIW9zct3a";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>