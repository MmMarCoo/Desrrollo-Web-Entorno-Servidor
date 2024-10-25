<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>
</head>
<body>
    <h1>Introduce tu Nombre y un Número</h1>
    <form action="guess.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="number">Número (1-10):</label>
        <input type="number" id="number" name="number" min="1" max="10" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
