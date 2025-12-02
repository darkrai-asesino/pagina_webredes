<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="Resultados.css">
</head>
<body>
    <div class="container" style="max-width: 500px; margin-top: 50px;">
        <h2>Iniciar Sesión</h2>
        <form action="procesar_login.php" method="POST">
            <label>Usuario:</label>
            <input type="text" name="usuario" required>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
        <p>¿No tenés cuenta? <a href="registro.php">Registrate</a></p>
    </div>
</body>
</html>