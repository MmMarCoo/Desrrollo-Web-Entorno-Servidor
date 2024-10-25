<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados tabla multiplicar</title>
</head>
<body>
    <h1> Resultados tabla de multiplicar </h1>
    <?php
    // Tabla de multiplicar.
    $tabla = $_REQUEST['numero'];
    $x = 1;
    $res = 0;
    
    while($x <= 10){
        $res = $tabla * $x;
        echo $tabla. " x ". $x ." = ". $res . "<br>";
        $x++;
    }
    ?>
</body>
</html>