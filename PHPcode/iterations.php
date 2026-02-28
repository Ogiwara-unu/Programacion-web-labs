<?php

function main() {
    echo "Ciclo while: <br>";
    $i = 1;
    while($i <= 5) {
        echo "i: " . $i . "<br>";
        $i++;
    }

    echo "Ciclo do-while: <br>";
    $j = 1;
    do {
        echo "j: " . $j . "<br>";
        $j++;
    } while($j <= 5);

    echo "Ciclo for: <br>";
    for($k = 1; $k <= 5; $k++) {
        echo "k: " . $k . "<br>";
    }
}

main();
?>