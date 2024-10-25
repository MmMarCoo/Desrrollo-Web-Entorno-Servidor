<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

// Obtener datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $user_number = intval($_POST['number']);
    
    // Guardar en sesión
    $_SESSION['name'] = $name;
    $_SESSION['user_number'] = $user_number;
    $_SESSION['attempts'] = 0;

    // Inicializar el número aleatorio y los intentos
    $random_number = 0;

    // Generar números aleatorios hasta coincidir con el número del usuario
    do {
        $random_number = rand(1, 10);
        $_SESSION['attempts']++;
    } while ($random_number !== $user_number && $_SESSION['attempts'] < 100); // Límite de 100 intentos

    // Verificar si se ha alcanzado el límite de intentos
    if ($_SESSION['attempts'] >= 100) {
        echo "<h1>Error</h1>";
        echo "<p>Se alcanzó el límite de intentos sin coincidencia.</p>";
        session_destroy();
        echo '<a href="index.php">Volver a intentar</a>';
        exit;
    }
}

// Recuperar datos de la sesión
$name = $_SESSION['name'];
$user_number = $_SESSION['user_number'];
$attempts = $_SESSION['attempts'];

echo "<h1>Resultado</h1>";
echo "<p>Hola, $name!</p>";
echo "<p>Tu número era: $user_number.</p>";
echo "<p>El número aleatorio generado coincidió después de $attempts intentos.</p>";

// Reiniciar el juego
session_destroy();
?>
<a href="index.php">Volver a jugar</a>

</body>
</html>