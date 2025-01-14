<?php

// Calcolo dell'area di un rettangolo
function calculateRectangleArea(int $length, int $width):int {
    return $length * $width;
}

// Concatenazione di stringhe
function concatenateStrings(string $first, string $second, string $separator = ' '):string {
    return $first . $separator . $second;
}

// Calcolo della media di numeri
function calculateAverage(... $numbers):float|int {
    $sum = array_sum($numbers);
    $count = count($numbers);
    return $count > 0 ? $sum / $count : 0;
}

// Verifica della maggiore età
function isAdult(int $age, $legalAge = 18):bool {
    return $age >= $legalAge;
}

// Calcolo del massimo di due numeri
function getMax(int|float $a, int|float $b):float|int {
    return ($a > $b) ? $a : $b;
}