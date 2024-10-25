<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta del formulario</title>
</head>
<body>
    <h1>Resultado del formulario</h1>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = htmlspecialchars(trim($_POST['nombre']));
        $email = htmlspecialchars(trim($_POST['email']));
        if(!empty($nombre)&&filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<p> Nombre: $nombre </p>";
            echo "<p> Email: $email </p>";
        } else {
            echo "Datos Incorrectos";
        }
    } else{
        echo "Los datos no se han enviado";
    }
    ?>
</body>
</html>