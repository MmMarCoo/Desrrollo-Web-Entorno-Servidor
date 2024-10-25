<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de resultados</title>
</head>
<body>
    <?php
    include 'calculos.php';

    $num1 = $_POST['valor1'];
    $num2 = $_POST['valor2'];

    if ($_REQUEST['radio1'] == "suma"){
        $resultado = suma($num1, $num2);
    echo "La suma es: " . $resultado;
    }
    if ($_REQUEST['radio1'] == "resta"){
        $resultado = resta($num1, $num2);
    echo "La resta es: " . $resultado;
    }
    if ($_REQUEST['radio1'] == "multiplicar"){
        $resultado = multiplicar($num1, $num2);
        echo "La multiplicacion es: " . $resultado;
    }
    if ($_REQUEST['radio1'] == "dividir"){
        $resultado = dividir($num1, $num2);
        echo "La division es: " . $resultado;
    }
    ?>
</body>
</html>