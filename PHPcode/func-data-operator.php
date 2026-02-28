<?php

function main() {
    $number = 67;
    $floatNumber = 3.5;
    $isActive = false;
    $caracter = 'B';
    $string = "Hello, php!";

    define('PI', 3.14159); 

    $sum = $number + $floatNumber;
    $subtraction = $number - $floatNumber;
    $times = $number * $floatNumber;
    $divition = $number / $floatNumber;

    $greaterThan = $number > $floatNumber ? $number : $floatNumber;
    echo "El numero mayor entre " . $number . " y " . $floatNumber . " es: " . $greaterThan . "<br>";
    $equal = $number == 67;
    if($number == 67) {
        echo "El numero " . $number . " es igual a 67 <br>";
    } else {
        echo "El numero no es igual a 67 <br>";
    }

    $logicalResult = ($number > $floatNumber) && ($isActive == false);

    $ecuation = ($number + $floatNumber) + 5 ;

    echo "Numero entero: " . $number . "<br>";
    echo "Numero flotante: " . $floatNumber . "<br>";
    echo "Boolean: " . ($isActive ? 'true' : 'false') . "<br>";
    echo "Caracter: " . $caracter . "<br>";
    echo "Texto: " . $string . "<br>";
    echo "Constante PI: " . PI . "<br>"; 
    echo "Suma Numero entero + flotante: " . $sum . "<br>";
    echo "Resta Numero entero + flotante: " . $subtraction . "<br>";
    echo "Multiplicacion Numero entero + flotante: " . $times . "<br>";
    echo "Division Numero entero + flotante: " . $divition . "<br>";
    echo "Entero > float: " . $greaterThan . "<br>";
    echo "Entero == 67: " . ($equal ? 'true' : 'false') . "<br>";
    echo "resultado logico: " . ($logicalResult ? 'true' : 'false') . "<br>";
    echo "Ecuation: " . $ecuation . "<br>";

}

main();


?>