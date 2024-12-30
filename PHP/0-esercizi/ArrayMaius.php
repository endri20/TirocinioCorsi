<?php

$numbers = [1, 2, 3, 4, 5, 6];

/*
$arrayFilter = array_filter(function($elements){
    if($elements % 2== 0){
        return $elements;
    }
}, $numbers);
*/

$evenNumbers = array_filter($numbers, function ($number) {
    return $number % 2 === 0;
});

print_r($evenNumbers);
