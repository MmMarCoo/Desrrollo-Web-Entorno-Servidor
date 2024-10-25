<?php

//Empezamos a hacer funciones
/*
function myMessage(){
    echo "Hellow World";
}

myMessage();
*/

// Segundo ejemplo

/*
function familyName($fname, $year){
    echo " $fname. Born in $year <br>";
}

familyName("Jani", "1975");
familyName("Hege", "1978");
familyName("Stale", "1983");
familyName("Kai Jin", "1992");
familyName("Borge", "1969");
*/

// Tercer ejemplo

/*
function setHeight($minHeight = 50){
    echo "The height is : $minHeight <br>";
}

setHeight(350);
setHeight();// Usara el valor default 50
setHeight(135);
setHeight(80);
*/

// Funcion de suma

/*
function sum($x, $y){
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = ". sum(5,10). "<br>";
echo "7 + 13 = ". sum(7,13). "<br>";
echo "2 + 4 = ". sum(2,4). "<br>";
*/

// Add value

/*
function addFIve(&$value){
    $value += 5;
}

$num = 2;
addFive($num);
echo $num;
*/

// Variable con varios numeros


function sumMyNumbers(...$x){
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++){
        $n += $x[$i];
        
    }
    return $n;
}

$a = sumMyNumbers(1,2,3,4,5,6,7,8,9);
echo $a;



?>