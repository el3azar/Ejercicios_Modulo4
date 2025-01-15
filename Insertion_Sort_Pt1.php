<?php

function insertionSortLastElement($array) {
    $n = count($array);
    $punto_interseccion = $array[$n - 1]; // Último elemento desordenado
    $j = $n - 2;

    // Desplazar elementos mayores al último hacia la derecha
    while ($j >= 0 && $array[$j] > $punto_interseccion) {
        $array[$j + 1] = $array[$j];
        printArray($array); // Imprimir estado intermedio
        $j--;
    }

    // Colocar el último elemento en su posición correcta
    $array[$j + 1] = $punto_interseccion;
    printArray($array); // Imprimir el estado final

    return $array;
}

function printArray($array) {
    echo "<br>";
    echo "<br>";
    echo implode(" ", $array) . "\n";
}

// Ejemplo de uso
insertionSortLastElement([2, 4, 6, 8, 3]);

?>
