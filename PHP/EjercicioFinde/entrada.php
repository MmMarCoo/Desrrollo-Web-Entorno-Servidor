<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Interactivo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function showAssociatedInput(selectedRadio) {
            const inputs = document.querySelectorAll('.associated-input');
            const associatedInput = selectedRadio.getAttribute('data-associated');

            inputs.forEach(input => {
                input.classList.add('hidden'); // Ocultar todos
                if (input.id === associatedInput) {
                    input.classList.remove('hidden'); // Mostrar solo el seleccionado
                }
            });
        }
    </script>
</head>
<body>

<form action="salida.php" method="POST">
    <label><b>Introduce su nombre:</b></label>
    <input type="text" name="name" required><br><br>

    <label><b>Introduce su apellido:</b></label>
    <input type="text" name="surname" required><br><br>

    <label><input type="checkbox" name="welcome" value="welcome"> Bienvenida</label><br>
    <label><input type="checkbox" name="goodbye" value="goodbye"> Despedida</label><br><br>

    <h3>Selecciona una opción:</h3>
    <div>
        <label>
            <input type="radio" name="option" value="countdown" data-associated="inputCountdown" onclick="showAssociatedInput(this)">
            Cuenta atrás (entre 1 y 20)
        </label>
    </div>
    <div>
        <label>
            <input type="radio" name="option" value="countTo50" data-associated="inputCountTo50" onclick="showAssociatedInput(this)">
            Cuenta hasta 50 (minimo desde el 1)
        </label>
    </div>
    <div>
        <label>
            <input type="radio" name="option" value="guessNumber" data-associated="inputGuessNumber" onclick="showAssociatedInput(this)">
            Adivina número aleatorio (10 intentos del 1 al 10)
        </label>
    </div>

    <div id="inputCountdown" class="associated-input hidden">
        <label><b>Introduce un número para la cuenta atrás:</b></label>
        <input type="number" name="countdownDetail" min="0" max="20">
    </div>
    <div id="inputCountTo50" class="associated-input hidden">
        <label><b>Introduce un número hasta 50:</b></label>
        <input type="number" name="countTo50Detail" min="1" max="49">
    </div>
    <div id="inputGuessNumber" class="associated-input hidden">
        <label><b>Introduce un número aleatorio entre 1 y 10:</b></label>
        <input type="number" name="guessNumber" min="1" max="10">
    </div>

    <br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
