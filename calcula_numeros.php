<?php
$numeros = [12, -5, 0, 7, -3, 8, 10, -1, 4, 6];
$positivos = 0;
$negativos = 0;
$pares = 0;
$impares = 0;

foreach ($numeros as $num) {
    // Contar positivo/negativo (zero é neutro, mas geralmente contado como positivo)
    if ($num >= 0) $positivos++;
    else $negativos++;

    // Contar par/ímpar
    if ($num % 2 == 0) $pares++;
    else $impares++;
}

echo "Positivos: $positivos <br>";
echo "Negativos: $negativos <br>";
echo "Pares: $pares <br>";
echo "Ímpares: $impares <br>";
?>