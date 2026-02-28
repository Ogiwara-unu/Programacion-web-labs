<?php

function main() {

    /************************************************
     * FUNCIONES Y PROCEDIMIENTOS
     ************************************************/
    echo "\nFunciones y procedimientos:\n";

    // Función con retorno
    $resultado = sumar(4, 6);
    echo "Resultado de sumar(4, 6): $resultado\n";

    // Paso por valor
    $x = 5;
    incrementarValor($x);
    echo "Después de incrementarValor (por valor): x = $x\n";

    // Paso por referencia
    incrementarReferencia($x);
    echo "Después de incrementarReferencia (por referencia): x = $x\n";
}

/************************************************
 * FUNCIÓN CON RETORNO
 ************************************************/
function sumar($num1, $num2) {
    return $num1 + $num2;
}

/************************************************
 * PASO DE PARÁMETROS POR VALOR
 ************************************************/
function incrementarValor($numero) {
    $numero++;
}

/************************************************
 * PASO DE PARÁMETROS POR REFERENCIA
 ************************************************/
function incrementarReferencia(&$numero) {
    $numero++;
}

/************************************************
 * EJECUCIÓN DEL PROGRAMA
 ************************************************/
main();

?>