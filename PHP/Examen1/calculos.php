<?php
// funcion para hacer tabla con bucle while
    function whiletabla($tabla){
        $x = 1;
        $res = 0;
        echo "Tabla de multiplicar hecha con while: <br>";
        while($x <= 10){
            $res = $tabla * $x;
            echo $tabla. " x ". $x ." = ". $res . "<br>";
            $x++;
        }
        echo "<br>";
    }
// funcion para hacer tabla con bucle for
    function fortabla($tabla){
        echo "Tabla de multiplicar hecha con for: <br>";
        $x = 0;
        for($x = 1; $x <= 10; $x++){
            echo "$tabla" . " X " . $x . " = " . $tabla * $x;
	        echo "<br>";
        } echo "<br>";
    }
// funcion para hacer tabla con bucle do while
    function dowhiletabla($tabla){
        $x = 1;
        $res = 0;
        echo "Tabla de multiplicar hecha con do while: <br>";
        do {
            $res = $tabla * $x;
            echo $tabla. " x ". $x ." = ". $res . "<br>";
            $x++;
        } while($x <= 10);
        echo "<br>";
    }
// funcion para imprimir el array
    function arrays($array){
        $array_numeros = explode(",",$array);
        $array_numeros = array_filter($array_numeros, 'is_numeric');
        return implode(" <br>",$array_numeros);
    }
?>