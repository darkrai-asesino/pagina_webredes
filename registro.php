<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="Resultados.css">
</head>
<body>
    <div class="container" style="max-width: 500px; margin-top: 50px;">
        <h2>Registrarse</h2>
        <form action="procesar_registro.php" method="POST">
            <label>Usuario:</label>
            <input type="text" name="usuario" required>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            <label>Código Admin (opcional):</label>
            <input type="text" name="admin_code"> 
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>