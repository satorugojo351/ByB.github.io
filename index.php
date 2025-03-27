<!-- Actualización para GitHub Pages -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rut = $_POST["rut"] ?? "";
    $password = $_POST["password"] ?? "";
    
    // Aquí puedes agregar validación y autenticación
    if ($rut === "12345678-9" && $password === "admin") {
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "RUT o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
</head>
<body>
    <div class="login-container">
        <h2>Portal-ByB</h2>
        <?php if (!empty($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form method="POST" action="">
            <input type="text" name="rut" placeholder="Ingrese su RUT" required>
            <input type="password" name="password" placeholder="Ingrese su contraseña" required>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
<!-- Forzar actualización en GitHub Pages -->
