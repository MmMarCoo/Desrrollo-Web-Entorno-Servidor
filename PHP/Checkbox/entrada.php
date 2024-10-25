<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos con varios numeros</title>
</head>
<body>
    <h1>Hagamos cosas con un conjunto de numeros</h1>
    <form method="POST" action="salida.php">
        <label for="numeros"><b>Introduzca números separados por comas:</b> </label>
        <input type="text" name="numeros" placeholder="1,2,3,4,5,6,7,8,9,0" required><br>
        <input type="checkbox" name="check1" value="suma">Suma
        <br>
        <input type="checkbox" name="check2" value="promedio">Promedio
        <br>
        <input type="submit" name="Operar">
    </form>
</body>
</html>