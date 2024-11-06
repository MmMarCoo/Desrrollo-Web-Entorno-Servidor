<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salida Examen</title>
</head>
<body>
    <?php
// Introducimos las funciones importadas de calculos.php
    include 'calculos.php';
    error_reporting(0);

// Aqui he propuesto las variables de los inputs   
        $name = $_REQUEST['name'];
        $surname = $_REQUEST['surname'];
        $tabla = $_REQUEST['tabla'];
        $array = $_POST['array'];
        $option = $_POST['option'];
        $check = $_POST['check'];

        echo "Bienvenido $name $surname!<br><br>";
// Los bucles para devolver el los resultados de los inputs usando las funciones hechas en calculos.php
        if(isset($_POST['check']) == "todas"){
            echo fortabla($tabla) . whiletabla($tabla) . dowhiletabla($tabla);
        }else {
        switch ($option) {
// con bucle FOR
            case 'for':
                echo fortabla($tabla);
                break;
// con bucle WHILE
            case 'while':
                echo whiletabla($tabla);
                break;
// con buble DO WHILE
            case 'do while':
                echo dowhiletabla($tabla);
                break;
            }
        }
// Por ultimo devolvemos los numeros introducidos en el array llamando a su funcion
        echo "El array introducido es: <br>". arrays($array);
   
   ?>
</body>
</html>