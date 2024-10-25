<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de las operaciones</title>
</head>
<body>
    <?php
    include 'calculos.php';
    //error_reporting(E_ALL ^ E_WARNING);

        $array = $_POST['numeros'];
        $array = explode(",",$array);
        $array = array_filter($array, 'is_numeric');
    
        if (isset($_REQUEST['check1']) == "suma"){
            $resultado = suma($array);
        echo "La suma es: " . $resultado. "<br>";
        }
        if (isset($_REQUEST['check2']) == "promedio"){
            $resultado = promedio($array);
        echo "El promedio es: ". $resultado;
        }
    ?>
</body>
</html>