<?php
  // Definimos una función llamada fizzBuzz que toma un entero $n como argumento
    function fizzBuzz($n) {
        // Inicializamos un array vacío para almacenar los resultados
        $respuesta = array();
    
        // Iteramos desde 1 hasta $n 
        for ($i = 1; $i <= $n; $i++) {
            // Comprobamos si $i es divisible tanto por 3 como por 5
             if ($i % 3 == 0 && $i % 5 == 0) {
                 // Si es cierto, añadimos "FizzBuzz" al array de respuestas
                $respuesta[] = "FizzBuzz";

            // Comprobamos si $i es divisible solo por 3
            } elseif ($i % 3 == 0) {
                // Si es cierto, añadimos "Fizz" al array de respuestas
                 $respuesta[] = "Fizz";

             // Comprobamos si $i es divisible solo por 5
            } elseif ($i % 5 == 0) {
                // Si es cierto, añadimos "Buzz" al array de respuestas
                $respuesta[] = "Buzz";
                
            } else {
                // Si no se cumple ninguna de las condiciones anteriores, añadimos el número $i como cadena
                $respuesta[] = (string)$i;
            }
        }
        // Retornamos el array de respuestas
        return $respuesta;
    }

    // Ejemplo de uso
    $n = 15; // Definimos un número entero
    $resultado = fizzBuzz($n); // Llamamos a la función fizzBuzz
    print_r($resultado); // Imprimimos el resultado
?>