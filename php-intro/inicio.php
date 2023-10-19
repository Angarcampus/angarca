<!DOCTYPE html>
<html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <?php
    $password = "password123"; 
    if (isset($_POST['password'])) {
        if ($_POST['password'] == $password) {
            header("Location: resultado-login.php");
            exit();
        } else {
            echo "Acceso denegado. La contraseña es incorrecta.";
        }
    }
    ?>
    <h1>Página de Inicio</h1>
    <form method="POST" action="inicio.php">
        Contraseña: <input type="password" name="password">
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
