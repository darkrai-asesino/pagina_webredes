<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$password_plana = $_POST['password'];

// 1. Buscar al usuario
$stmt = $conn->prepare("SELECT id, usuario, password_hash, rol FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();
    
    // 2. Verificar la contraseña hasheada
    if (password_verify($password_plana, $fila['password_hash'])) {
        // ¡Login correcto! Guardamos los datos en la sesión
        $_SESSION['user_id'] = $fila['id'];
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['rol'] = $fila['rol'];
        
        // Redirigir al inicio
        header("Location: index.php");
        exit;
    } else {
        echo "Contraseña incorrecta. <a href='login.php'>Volver</a>";
    }
} else {
    echo "Usuario no encontrado. <a href='login.php'>Volver</a>";
}

$stmt->close();
$conn->close();
?>