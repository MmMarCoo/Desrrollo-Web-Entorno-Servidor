<?php
// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $option = htmlspecialchars($_POST['option']);
    // Variables para los inputs
    $countdownDetail = isset($_POST['countdownDetail']) ? htmlspecialchars($_POST['countdownDetail']) : '';
    $countTo50Detail = isset($_POST['countTo50Detail']) ? htmlspecialchars($_POST['countTo50Detail']) : '';
    $guessNumber = isset($_POST['guessNumber']) ? htmlspecialchars($_POST['guessNumber']) : '';

    // Procesamos los datos según la opción seleccionada
    if(isset($_REQUEST['welcome']) == "welcome"){
        echo "Bienvenido $name $surname!<br>";
    } else{
        echo "Adiós $name $surname!<br>";
    }
    // Implementamos funciones para los inputs
    switch ($option) {
        case 'countdown':
            echo "<p>Cuenta atrás:</p><ul>";
            for ($i = $countdownDetail; $i >= 0; $i--) {
                echo "<li>$i</li>";
            }
            echo "</ul>";
            break;
        case 'countTo50':
            echo "<p>Números contados:</p><ul>";
            for ($i = $countTo50Detail; $i <= 50; $i++) {
                echo "<li>$i</li>";
            }
            echo "</ul>";
            break;
        case 'guessNumber':
            $intentos = 1;
            while($guessNumber < 10){
                $aleatorio = rand(1,10);
                if($guessNumber == $aleatorio){
                    echo "He acertado en el intento número $intentos";
                    break;
                }
                $intentos = $intentos + 1;
                $x = $x = 1;
                if($intentos > 10){
                    echo "No he adivinador en los 10 intentos, GAME OVER! ";
                    break;
                }
            }
            break;
        default:
            echo "<p>Gracias por la visita.</p>";
            break;
    }
} else {
    echo "<p>Por favor, envía el formulario.</p>";
}
?>
