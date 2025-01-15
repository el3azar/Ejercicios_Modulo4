<?php
function isHappy($n) {
    $seen = []; // Array para almacenar números que ya salieron en el ciclo

    while ($n != 1) {//mientras no sea 1
        if (in_array($n, $seen)) {
            echo "Ciclo detectado: " . implode(" -> ", $seen) . "\n";
            return false; // Hay un ciclo, no es un número feliz
        }
        $seen[] = $n; // Agregar el número actual al array
        echo"<br>";
        // Imprimir el número actual y la suma de cuadrados
        echo "Número actual: $n\n";
        echo"<br>";

        // Calcular la suma de los cuadrados de los dígitos
        $n = sumOfSquares($n);

        echo "Suma de cuadrados: $n\n";
        echo"<br>";
        echo "-------------------------\n";
    }

    return true; // Si llegamos a 1, es un número feliz
}

function sumOfSquares($number) {
    $sum = 0;
    while ($number > 0) {
        $digit = $number % 10; // Obtener el dígito menos significativo
        $sum += $digit * $digit; // Elevar al cuadrado y sumar
        $number = intval($number / 10); // Eliminar el dígito menos significativo
    }
    return $sum;
}

//prueba
$n = 19;
if (isHappy($n)) {
    echo"<br>";
    echo"<br>";
    echo "$n es un número feliz.\n";
} else {
    echo"<br>";
    echo"<br>";
    echo "$n no es un número feliz.\n";
}
?>
