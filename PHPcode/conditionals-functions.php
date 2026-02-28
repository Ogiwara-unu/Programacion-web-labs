<?php

function main() {
    
    echo "<h1 style='text-align: center;'>Estructura secuencial:</h1> <br>";
    $A = 67;
    $B = 69;
    $C = $A + $B;
    echo "  A:  ". $A . "  B:  ". $B . "<br> El resultado de C es la suma de A + B:  " . $C . "<br>";
    echo "<img  style='width: 100px; height: 100px; justify-content: center;' src='https://i.pinimg.com/736x/16/e1/ef/16e1ef04b0b1fa9eefd0c03b35c01018.jpg' alt='Placeholder Image'>";

    echo "Condicional if-else: <br>";
    if($A > $B) {
        echo "A es mayor que B <br>";
    } else {
        echo "B es mayor que A <br>";
    }
    
    echo "Condicional switch: <br>";
    $day = 3;
    switch($day) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;  
        case 7:
            echo "Domingo";
        default:
            echo "Día no válido";
    }

    echo "/n";
}

main();
?>