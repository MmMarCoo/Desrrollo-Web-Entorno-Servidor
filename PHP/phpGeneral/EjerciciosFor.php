<?php
/*
//Ejercicio 1. Imprime los numeros del 1 al 10

for($i= 1; $i <= 10; $i++){
    echo $i;
}
*/
//Ejercicio 2. Sumar los numeros del 1 al 10 en imprimir el resutltado
/*
$result= 0;
for($i= 0; $i <= 10; $i++){
    $result = $result + $i;
} echo $result;
*/
 //Ejercicio 3. Pedir al usuario que ingrese un numero y mostrar su tabla de multiplicar del 1 al 10.
/*
$tabla = 10;
$res = 0;

for($i = 1; $i < 10; $i++){
   $res= $tabla*$i;
   echo $tabla. 'i'. $i. '='. $res.'<br>';
}
*/

// EJercicio 4. Imprimir los primeros 10 numeros pares. 
/*
for($i = 1; $i <= 10; $i ++){
    if($i % 2 == 0){
    echo $i.'<br>';
    } else; 
    continue;
    
}
*/

// Ejercicio 5. Calcular el factorial de un numero ingresado por el usuario.
/*
$fact = 10;
$res= 1;
 for($i = 1; $i<= $fact; $i++){
    $res = $res*$i;
    echo $res.'<br>';
 }
*/

// Ejercicio 6. Sumar los primeros N numeros pares.
/*
$res= 0;
for($i = 1; $i <= 20; $i++){
    if($i % 2 == 0){
        $res= $i + $res;
    } else
    { continue;}
    
} echo 'Todos los numeros pares suman '. $res;
*/

// Ejercicio 7. Pedir al usuario que introduzca 5 numeros y devolver la res de los mismos.
/*
$array = [3,2,4,5,7];
$x = count($array);
$res = 0;

for($x = 0; $x < count($array); $x++){
$res = $res + $array[$x];
} echo $res;
*/

// Ejercicio 8. Perdir al usuario que introduzca un numero. En el caso de haber introducido un 4, el programa debera mostrar lo siguiente por pantalla:
/*
$z = 4;

 for($i = 1; $i <= $z; $i++){
    
    for($j = 1; $j <= $z; $j++){
        echo $j .' ';
    } echo '<br>';
 }
*/

// Ejercicio 9 Pedirle al usuario que introduzca una anchura y una altura. Si la anchura introducida es 3 y la altura 4, el resultado obtenido debera ser el siguiente:
/*
$anch = 3;
$alt = 4;
 for($l = 1; $l <= $alt; $l++){
    for($f = 1; $f <= $anch; $f++){
        echo $f .' ';
    } echo '<br>';
 }
*/

// Ejercicio 10 Pedirle al usuario que introduzca un numero. Para el caso de haber introducido un 5 a la salida debera ser la siguiente:
/*
$x = 5;

for($a = 1; $a <= $x; $a++){
    for($b = 1; $b <= $a; $b++){
        echo $b . ' ';
    } echo ' <br>';
}
*/

?>