<?php

function somma($a, $b) : int{
    return $a + $b;
}

function media(array $valori) : int | float{
    $tot = 0;
    foreach ($valori as $valore) {
        $tot = somma($tot, $valore);
    }
    return $tot / count($valori);
}

$numeroA = 10;
$numeroB = 20; 

$numeri = [10, 5, 1];

echo somma($numeroA, $numeroB) . "\n";
echo media($numeri) . "\n";