<?php
// Ejemplo 1
/*
for($x = 0; $x <= 10; $x++){
    echo "The number is: $x <br>";
}
    */

// Ejemplo 2
/*
for($x = 0; $x <= 10; $x++){
    if($x == 3) break;
    echo "The number is: $x <br>";
}
    */

//Ejemplo 3
/*
for($x = 0; $x <= 10; $x++){
    if($x == 3) continue;
    echo "The number is: $x <br>";
}
    */

//Ejemplo 4
/*
for($x = 0; $x <= 100; $x+=10){
    echo "The number is: $x <br>";
}
    */

//Ejercicio 1
/*
for($x = 0;$x <= 20; $x += 2){
    if($x == 0) continue;
    echo "$x <br>";
}
    */

//Ejercicio 2
/*
$result = 0;
for($x = 1; $x <= 19; $x += 2){
    $result = $result + $x;
} echo "La suma de los impares entre 0 y 20 es <b> $result";
*/

//Ejercicio 3
/*
$cad = "Buenos Dias";
$num = strlen($cad);
$cont = 0;
for($x = 0; $x < $num; $x++){
    if($x == 6) continue;    
    $cont++;
        
}   echo "La palabra " . "$cad" . " contiene " . $cont . " letras";
*/

//Ejercicio 4
/*
$numeros = [-12, 10, 5, -8, 7, -9];
$num = count($numeros);
$numn = 0;
$nump = 0;
$result = 0;

for($x = 0; $x < $num; $x++){
    if($numeros [$x] <0){
        $numn = $numn + $numeros[$x];
        }
    if($numeros [$x] >0){
        $nump = $nump + $numeros[$x];
    }
} 
    echo "La suma de numeros negativos: <b>$numn</b> <br>";
    echo "La suma de numeros negativos: <b>$nump</b> <br>";
    $result = $nump + $numn;
    echo "La suma de los números del array es: <b>$result </b>";
*/

//Ejercicio 5\
/*
$dias = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];
$lab = count($dias);

for($x = 0; $x < $lab; $x++){
    switch($x){
        case 0:
            break;
        case 1:
            echo "Es ".$dias[$x]. ".<br>";
            break;
        }
        */
 // Semana entera
    /*   
        if($x < 5){
        echo "El ".$dias[$x]." es laborable. <br>";
    } else{
        echo "El ".$dias[$x]." no es laborable. <br>";
    }

    }  
*/

?>