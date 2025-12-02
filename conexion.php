<?php
$servidor = "localhost";
$usuario_db = "root"; // Usuario por defecto de XAMPP
$password_db = "";    // Password por defecto de XAMPP
$nombre_db = "liga_2025_db";

$conn = new mysqli($servidor, $usuario_db, $password_db, $nombre_db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Iniciar la sesión en todos los archivos que incluyan la conexión
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>