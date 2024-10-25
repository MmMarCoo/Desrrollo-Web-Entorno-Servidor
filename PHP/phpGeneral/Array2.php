<?php
/*
$cars = ['brand' => 'Ford', 'model' => 'Mustang', 'year' =>1964];
$cars['year']= 2024;
echo $cars["year"]. '<br>';
var_dump($cars); 
 */

 /*
$cars = ['brand' => 'Ford', 'model' => 'Mustang', 'year' =>1964];

foreach($cars as $x => $y){
    echo "$x: $y <br>";
}
*/

/*
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x){
    $x = "Ford";
}
unset($x);
var_dump($cars);
*/

/*
$fruits = ["Apple", "Banana", "Cherry"];
$fruits[] = "Orange";
var_dump($fruits);
*/

// Ejercicio 1. Hacer un listado de nombres y que salga el listado con el numero total.

/*
$array= ["Vladimir", "Felix", "Maite", "Eduardo"];
echo "Listado de nombres: <br>";
foreach($array as $y){
    echo "<b>$y</b>". "<br>";
} echo "El numero de nombres en el array es:".count($array);
*/

// Ejercicio 2. Array 12, 48, 25, 15. Que diga cual es el numero mas grande.
/*
$array = [12, 48, 25, 15];

sort($array);
var_dump($array);
echo "<br> El numero mas grande de este array es: ".end($array);
*/
/* Algo aqui no funciona
$array = [12, 48, 25, 15];
$max= [0];

foreach($array as $x){
    if($x > $max){
        $max = $x;
    } 
} echo $max;
*/

/*
$cars = ['brand' => 'Ford', 'model' => 'Mustang', 'year' =>1964];
unset($cars["model"]);
var_dump($cars);
*/

/*
$cars = ['brand' => 'Ford', 'model' => 'Mustang', 'year' =>1964];
$newcars = array_diff($cars, ["Mustang", 1964]);
var_dump($newcars);
*/

/*
$cars = ["brand" => "Ford", "model" => "Mustang", "year" => 1964];
krsort($cars);
var_dump($cars);
*/

/*
$numbers = [4,6,2,22,11];
sort($numbers);
var_dump($numbers);
*/

/*
$age = ["Peter"=>"35","Ben" => "37", "Joe" => "43"];
asort($age);
var_dump($age);
*/


// Array de frutas. Invertido.
/*
$fruits =["Manzana", "Pera", "Platano", "Naranja"];
$r = array_reverse($fruits);
var_dump($r); 
*/

// Array frutas. Que aparezca manzana.
/*
$fruits =["Manzana", "Pera", "Platano", "Naranja"];
if (in_array("Manzana", $fruits))
  {
  echo "Existe.";
  }
else
  {
  echo "No exitse.";
  }
*/

// Array frutas. Eliminar una fruta
/*
$fruits =["Manzana", "Pera", "Platano", "Naranja"];
$newfruits = array_diff($fruits, ["Pera"]);
var_dump($newfruits);
*/

?>