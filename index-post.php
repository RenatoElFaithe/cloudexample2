<?php
include("conexion.php");
$con = conexion();

$doc  = isset($_POST["doc"])  ? trim($_POST["doc"])  : null;
$nom  = isset($_POST["nom"])  ? trim($_POST["nom"])  : null;
$ape  = isset($_POST["ape"])  ? trim($_POST["ape"])  : null;
$dir  = isset($_POST["dir"])  ? trim($_POST["dir"])  : null;
$cel  = isset($_POST["cel"])  ? trim($_POST["cel"])  : null;

if ($doc && $nom && $ape) {
    $sql = "INSERT INTO persona (dni, nombre, apellido, direccion, celular) 
            VALUES ($1, $2, $3, $4, $5)";
    $result = pg_query_params($con, $sql, [$doc, $nom, $ape, $dir, $cel]);
}

// Redirigir siempre de nuevo, sin imprimir nada
header("Location: index.php");
exit;
?>
