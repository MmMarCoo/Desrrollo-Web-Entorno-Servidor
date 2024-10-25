<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada del calculo</title>
</head>
<body>
    <h1> Enviame 2 numeros y que calculo quieres hacer </h1>
    <form action="salida.php" method="post">
    Ingrese primer valor:
    <input type="number" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="number" name="valor2">
    <br>
    <input type="radio" name="radio1" value="suma">sumar
    <br>
    <input type="radio" name="radio1" value="resta">restar
    <br>
    <input type="radio" name="radio1" value="multiplicar">multiplicar
    <br>
    <input type="radio" name="radio1" value="dividir">dividir
    <br>
    <input type="submit" name="operar">
  </form>
</body>
</html>