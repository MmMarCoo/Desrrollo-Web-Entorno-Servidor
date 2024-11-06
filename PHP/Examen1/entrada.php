<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Entrada examen
    </title>
</head>
<body>
<! Aqui esta el formulario de entrada para el nombre
    <div> 
    <form action="salida.php" method="POST">
        <label>
            <b>Nombre:</b>
        </label>
        <input type="text" name="name" required><br><br>
        <label>
            <b>Apellido:</b>
        </label>
        <input type="text" name="surname" required><br><br>
    </div>
    <h1>Tabla de multiplicar</h1>
    <div>
<! Tenemos los inputs para los el numero del que queremos que haga la tabla de multiplicar
        <label>
            Introduzca número:
        </label>
        <input type="number" name="tabla" min="1" max="999" required><br><br>
<! Los radio buttons
        <label>
            <b>Radio button:</b>
        </label><br>
        <input type="radio" name="option" value="for">For<br>
        <input type="radio" name="option" value="while">While<br>
        <input type="radio" name="option" value="do while">Do While<br><br>
<!La checkbox
        <label>
            <b>Check Box </b>
        </label><br>
        <input type="checkbox" name="check" value="todas">Mostrar todas las opciones<br>
    </div>
    <h1>Arrays</h1>
    <div>
<! Entrada del array de numeros separados por comas
        <label for="array">
            <b>Introduzca números separados por comas:</b>
        </label>
        <input type="text" name="array" placeholder="1,2,3,4,5,6,7,8,9,0" required><br>
        <input type="submit" name="Enviar">
    </div>
    </form>
</body>
</html>