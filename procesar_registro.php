<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$password_plana = $_POST['password'];
$admin_code = $_POST['admin_code']; // Código simple para crear admin

// ¡¡IMPORTANTE!! Hashear siempre la contraseña
$password_hash = password_hash($password_plana, PASSWORD_DEFAULT);

// Determinar el rol
$rol = 'user';
if ($admin_code === 'admin123') { // Poné un código secreto
    $rol = 'admin';
}

// Usar sentencias preparadas para evitar Inyección SQL
$stmt = $conn->prepare("INSERT INTO usuarios (usuario, password_hash, rol) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $usuario, $password_hash, $rol);

if ($stmt->execute()) {
    echo "¡Usuario registrado! <a href='login.php'>Iniciar Sesión</a>";
} else {
    echo "Error al registrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>