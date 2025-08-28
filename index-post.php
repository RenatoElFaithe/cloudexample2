<?php
include("conexion.php");
$con = conexion();

// Validar que los datos vengan del formulario
$doc  = isset($_POST["doc"])  ? trim($_POST["doc"])  : null;
$nom  = isset($_POST["nom"])  ? trim($_POST["nom"])  : null;
$ape  = isset($_POST["ape"])  ? trim($_POST["ape"])  : null;
$edad = isset($_POST["edad"]) ? (int)$_POST["edad"]  : null;

// Evitar insert vacío
if ($doc && $nom && $ape && $edad) {
    // Usar parámetros para mayor seguridad
    $sql = "INSERT INTO persona (dni, nombre, apellido, edad) VALUES ($1, $2, $3, $4)";
    $result = pg_query_params($con, $sql, [$doc, $nom, $ape, $edad]);

    if (!$result) {
        die("❌ Error en la consulta: " . pg_last_error($con));
    }
}

// Redirigir de nuevo
header("Location: index.php");
exit;
?>
