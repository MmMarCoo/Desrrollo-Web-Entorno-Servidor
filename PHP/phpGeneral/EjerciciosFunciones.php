<?php

// 1. Declarar una funcion sumar
/*
function sum($x, $y){
    $z = $x + $y;
    return $z;
}

echo sum(4,7);
 */

// 2. Funcion factorial
/*
function factorial($x){
    if($x < 0) {
        return "No se puede";
    }
    elseif($x === 0){
        return 1;
    } else{
        $z = 1;
        for($i = 1; $i <= $x; $i++){
           $z = $z * $i;
        }return $z;
    }
}
echo factorial(5);
*/

// 3. Funcion Ordenar array
/*

$array = ["Marco", "Andre", "Rodrigues", "Fernandes"];
function ordenar_array($array){
    sort($array);
    echo implode(" ", $array);
}
echo ordenar_array($array);
*/


// 4. Calcular la longitud de una cadena
/*

$cad = "Hola";

function long($cad){
    return strlen($cad);
}
echo long($cad);
*/

// 5. Invertir cadena
/*

$cad = "Marco Andre Rodrigues Fernandes";

function invert($cad){
    return strrev($cad);
}
echo invert($cad);
*/

// 6. Valor maximo de un array
/*

function maxValue($numeros){
    return max($numeros);

}

$numeros= [23,7,32,59,11,26,69,1];
echo "El valor maximo es ". maxValue($numeros). ".";
*/


// 7. Conprobar que una cadena solo tiene digitos.
/*

$array = "26317";
function onlyN($array){
    return ctype_digit($array);
}
    if(onlyN($array)){
        echo "Solo hay digitos.";
    } else {
        echo "NO hay solo digitos.";
    }
*/


//8. Hallar la media de un array.
/*

function media($n){
    echo array_sum($n) / count($n);
}

$n = [10, 17, 23, 11, 32];
return media($n);
*/

//9. Funcion que genere numeros aleatorios.
/*

function aleatorio($min, $max, $cantidad){
    $array = array();
    
    for($x = 0; $x < $cantidad; $x++){
        $array[] = rand($min, $max);
    }
    return $array;
}

$randomN = aleatorio(1, 10, 4);
 print_r($randomN);
*/


// 10. Unir dos cadenas
/*

$cad1 = array("Hola","Marco","Hello");
$cad2 = array("Mundo","Planeta", "World");


function unirC($cad1, $cad2){
    return array_merge($cad1, $cad2);
}

$frase = unirC($cad1, $cad2);
echo implode(", ", $frase);
*/

// 11. Contar palabras en una cadena.
/*

$cad = "Hola Mundo, bienvenidos a PHP.";

function contarP($cad){
    $len = str_word_count($cad);
    echo $len;
}

return contarP($cad);
*/

// 12. Contar vocales en una cadena.
/*

function contarVocales($cadena){
	$vocalesEncontradas = 0;
	$cadena = strtolower($cadena);
	$longitud = strlen($cadena);

	for ($i = 0; $i < $longitud; $i++) { 
		if (in_array($cadena[$i], ["a", "e", "i", "o", "u"])) {
			$vocalesEncontradas++;
		}
	}
	return $vocalesEncontradas;
}

$vocales = contarVocales("Espectacular");
echo "La cantidad de vocales de la cadena es : ".$vocales;
*/


?>