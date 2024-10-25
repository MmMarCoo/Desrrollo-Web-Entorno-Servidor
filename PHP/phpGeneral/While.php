<?php
// while if
/*
$i = 1;

while($i<6){
    if($i == 3) break;
    echo $i;
    $i++;
}
*/

//Continue
/*
$i = 0;

while($i <6){
    $i++;
    if($i == 3) continue;
    echo $i;
}
    */

//Step 10
/*
    $i = 0;
    while($i < 100){
        $i += 10;
        echo $i . "<br>";
    }
*/

//Ejercicio 1 (hasta el 20 solo impares)
/*
$i = 1;

while($i < 20){
    $i += 2;
    if($i >= 20) break;
    echo $i . "<br>";
}
*/

//Ejercicio 2 (hasta 20 solo 5,10,15,20)
/*
$i = 0;

while($i < 20){
    $i += 5;
    echo $i . "<br>";
}
*/

//Ejercicio 3 (solo pares hasta 20 con %)
/*
$i = 1;

while($i < 20){
    $i ++;
    if($i % 2 == 1) continue;
    echo $i . "<br>"; 
}
*/

//Ejercicio 4 (del 20 al 1)
/*
$i= 21;

while($i > 1){
    $i --;
    echo $i . "<br>";
}
*/

//Ejercicio 5 (sumatorio)
//Primera opción con for
/*
$x = 0;

for($i = 1; $i <= 10; $i++){
    $x = $x + $i;
    echo $x . "<br>";
  }
*/
// Segunda opción con while
/*
 $i = 1;
 $x = 0;

 while($i <= 10){
    $x += $i;
    $i ++;
    echo $x . "<br>";
 }
*/

//Ejercicio 6 (tabla de multiplicar)
/*
$tabla = 2;
$x = 1;
$res = 0;

while($x <= 10){
    $res = $tabla * $x;
    echo $tabla. " x ". $x ." = ". $res . "<br>";
    $x++;
}
*/

//Ejercicio 7 (Letras)
/*
$cad = "Hola";
$x = 0;
$num = strlen($cad);
$cont = 0;

while($x < $num){
    if(ctype_alpha($cad[$x])){
    $cont ++;
    }
    $x ++;
}
    echo "La palabra " . "'$cad'" . " contiene " . $cont . " letras";
*/
?>
