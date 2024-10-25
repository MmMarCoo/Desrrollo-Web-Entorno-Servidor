<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resulado del formulario</title>
</head>
<body>
<h1>Resultado del formulario</h1>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = htmlspecialchars(trim($_POST['nombre']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));
        if(!empty($nombre)&&!empty($password)&&filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<p> <b>Nombre</b>: $nombre </p>";
            echo "<p> <b>Email</b>: $email </p>";
            echo "<p> <b>Password</b> registered as: $password</p>";
        } else {
            echo "Datos Incorrectos";
        }
    } else{
        echo "Los datos no se han enviado";
    }
 
?>    
</body>
</html>