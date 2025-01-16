<?php
function search($nums, $target) {
    $left = 0; 
    $right = count($nums) - 1; // Último índice del arreglo

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2); // Encuentra el índice medio

        // Si el elemento en el medio es el objetivo, lo retornamos
        if ($nums[$mid] == $target) {
            return $mid;
        }
        // Si el objetivo es menor que el valor medio, buscamos en la mitad izquierda
        else if ($nums[$mid] > $target) {
            $right = $mid - 1;
        }
        // Si el objetivo es mayor que el valor medio, buscamos en la mitad derecha
        else {
            $left = $mid + 1;
        }
    }

    // Si no encontramos el objetivo, devolvemos -1
    return -1;
}

// Primer ejemplo de uso
$nums1 = [-1, 0, 3, 5, 9, 12];
$target1 = 9;
$result1 = search($nums1, $target1);
echo "El índice del target ($target1) es: $result1\n";

echo "<br>";

// Segundo ejemplo de uso
$nums2 = [-1, 0, 3, 5, 9, 12];
$target2 = 2;
$result2 = search($nums2, $target2);
echo "El índice del target ($target2) es: $result2\n";
?>
