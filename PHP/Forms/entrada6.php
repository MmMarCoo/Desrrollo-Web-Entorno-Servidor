<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinar numero aleatorio</title>
</head>
<body>
    <h1> Pon aqui tu nombre y un numero que voy a intentar adivinar.</h1>
    <form method="POST" action="salida6.php">
        <label for="nombre"><b> Introducir tu nombre aqui:</b></label>
        <input type="text" name="nombre" required><br>
        <label for="numero"><b> Introducir un numero aleatorio del 1 al 10:</b></label>
        <input type="number" name="numero" required min="1" max="10"><br>
        <input type="submit" name="Adivinar">
</body>
</html>