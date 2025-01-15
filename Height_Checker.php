<?php

//funcion que implementa el algortimo de ordenamiento burbuja
function bubblesort($array){
    $contador = 0;
    $segundo_contador = 0;
    for($i = 0; $i < count($array); $i++){
        $contador++;
        for($j = 0; $j < count($array) - 1; $j++){
            $segundo_contador++;
            if($array[$j] > $array[$j + 1]){
                $temporal = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temporal;
            }
        }
    }
    
    return $array;
}

//funcion que recibe un array de alturas y devuelve la cantidad de estudiantes que no estan en la posicion correcta
function heightChecker($heights) {
    $sorted = bubblesort($heights);
    echo "Array ordenado: ";
    var_dump($sorted);
    $count = 0;
    for ($i = 0; $i < count($heights); $i++) {
        if ($heights[$i] != $sorted[$i]) {
            $count++;
        }
    }
    return $count;
}

echo "<br>";

$result = heightChecker([1,1,4,2,1,3]); // 3

echo "<br>";
echo "Resultado: " . $result;

?>