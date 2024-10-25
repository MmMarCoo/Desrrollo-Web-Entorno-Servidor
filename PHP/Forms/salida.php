<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de datos del form</title>
</head>
<body>
    <?php 
    echo "Hola ";
    echo $_REQUEST['name'];
    $edad = $_REQUEST['age'];
    if($edad >= 18){
        echo " ,eres mayor de edad ";
    } if($edad < 18) {
        echo " ,eres menor de edad ";
    }
    ?>
</body>
</html>