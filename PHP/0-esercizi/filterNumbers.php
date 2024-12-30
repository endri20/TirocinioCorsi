<?php

function filterNumbers(array $numbers, callable $callback) {
    $filtered = [];
    foreach ($numbers as $number) {
        if ($callback($number)) {
            $filtered[] = $number;
        }
    }
    return $filtered;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Filtra numeri pari
$evenNumbers = filterNumbers($numbers, function($n) {
    return $n % 2 === 0;
});
print_r($evenNumbers); // Output: [2, 4, 6, 8, 10]

// Filtra numeri maggiori di 5
$greaterThanFive = filterNumbers($numbers, function($n) {
    return $n > 5;
});
print_r($greaterThanFive); // Output: [6, 7, 8, 9, 10]

// Filtra numeri dispari con una funzione normale
function isOdd($n) {
    return $n % 2 !== 0;
}
$oddNumbers = filterNumbers($numbers, 'isOdd');
print_r($oddNumbers); // Output: [1, 3, 5, 7, 9]



