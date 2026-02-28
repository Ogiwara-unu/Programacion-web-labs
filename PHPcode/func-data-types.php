<?php

function main() {
    $number = 42;
    $floatNumber = 3.14;
    $isActive = true;
    $caracter = 'A';
    $string = "Hello, php!";

    define("PI", 3.14159); // Esta es una palabra reservada para definir constantes, no se puede cambiar su valor después de ser definida.


    echo "Integer: " . $number . "<br>";
    echo "Float: " . $floatNumber . "<br>";
    echo "Boolean: " . ($isActive ? 'true' : 'false') . "<br>";
    echo "Character: " . $caracter . "<br>";
    echo "String: " . $string . "<br>";
    echo "Constant PI: " . PI . "<br>"; 
}

main();

?>