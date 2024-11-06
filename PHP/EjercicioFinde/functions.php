<?php

function cuentatras($option1){
    $i = 20;
    while($i >= $option1){
        echo "$i<br>";
        $i--;
    }
}

function countto($option2){
    for ($i = 1; $i <= $option2; $i++) {
        echo $i . "<br>";
    }
}

function random($option3){
    $x = 0;
    $intentos = 1;
    while($x<10){
        $aleatorio = rand(1,10);
        if($num == $aleatorio){
            echo "He acertado en el intento número ". "$intentos";
            break;
        }
        $intentos = $intentos + 1;
        $x = $x + 1;
        if($intentos > 10){
        echo "No he adivinado en los 10 intentos, GAME OVER!";
        }
    }
}
?>