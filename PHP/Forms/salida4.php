<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output de numeros</title>
</head>
<body>
    <h1> Resultados </h1>
    <?php
    //Ejercicio de recibir numeros separados por comas y devolver su suma y su media.
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $numeros = $_POST['numeros'];
        $array_numeros = explode(",",$numeros);
        $array_numeros = array_filter($array_numeros, 'is_numeric');
        
        $suma = array_sum($array_numeros);
        $cantidad = count($array_numeros);
        $media = $cantidad > 0 ? $suma / $cantidad : 0;

        echo "<p> Suma: $suma</p>";
        echo "<p> Media: $media</p>";

    } else {
        echo "No se han introducido los números correctamente";
    }
    ?>
    
</body>
</html>