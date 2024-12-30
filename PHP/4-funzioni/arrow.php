<?php

$numbers = [1, 2.5, 3.2, 4, 5];


/*
foreach ($numbers as $number) {
    $doubled[] = $number * 2;
}
print_r($doubled);
*/

function dupval($val){
    return $val * 2;
}

$doubled = array_map( 'floor', $numbers);
print_r($doubled);