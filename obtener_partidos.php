<?php
header('Content-Type: application/json; charset=utf-8');

// Mostrar errores (para debug)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexión a la base de datos
$host = "localhost";
$user = "root";
$pass = "";
$db = "liga_argentina";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo json_encode(["error" => "Error de conexión: " . $conn->connect_error]);
    exit;
}

$conn->set_charset("utf8mb4");

// Consulta
$sql = "SELECT * FROM partidos ORDER BY fecha DESC";
$res = $conn->query($sql);

if (!$res) {
    echo json_encode(["error" => "Error en consulta SQL: " . $conn->error]);
    exit;
}

// Pasar filas a array
$partidos = [];
while ($row = $res->fetch_assoc()) {
    $partidos[] = $row;
}

// Devolver JSON
echo json_encode($partidos, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$conn->close();
