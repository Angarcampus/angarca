<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Inicio de Sesión</title>
</head>
<body>
    <?php
    $rol = "Usuario";
    if ($rol == "Administrador") {
        echo "Autorizado para modificar datos.<br>";
        echo '<a href="data.php">Ir a la página de Datos</a>';
    } elseif ($rol == "Usuario") {
        echo "Autorizado para ver datos, pero no para modificar.<br>";
        echo '<a href="data.php">Ir a la página de Datos</a>';
    } else {
        echo "Acceso denegado. Rol no válido.";
    }
    ?>
</body>
</html>
