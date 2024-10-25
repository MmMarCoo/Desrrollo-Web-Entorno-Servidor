<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivino tu numero</title>
</head>
<body>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num = $_REQUEST['numero'];
    $name = $_REQUEST['nombre'];
    $x = 0;
    $intentos = 1;
    echo "Hola ". $name. "<br>";

    while($x<10){
        $aleatorio = rand(1,10);
        if($num == $aleatorio){
            echo "He acertado en el intento número ". "$intentos";
            break;
        }
        $intentos = $intentos + 1;
        $x = $x + 1;
        if($intentos > 10){
        echo "No he adivinado en los 10 intentos, GAME OVER!";
        }
    }
}
    ?>
</body>
</html>