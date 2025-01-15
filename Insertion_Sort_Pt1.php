<?php

function insertionSortLastElement($array) {
    //obtenemos n del array, es mas eficiente que recibir n como parametro
    $n = count($array);
    $punto_interseccion = $array[$n - 1]; // Último elemento desordenado
    $j = $n - 2; //antepenultimo elemento

    // Desplazar elementos mayores al último hacia la derecha
    while ($j >= 0 && $array[$j] > $punto_interseccion) {//si el antepenultimo es mayor al ultimo
        //el elemento j+1(ultimo) se convierte en el elemento j
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

// Prueba
insertionSortLastElement([2, 4, 6, 8, 1]);

?>
