<?php

function sum(...$values){
    $sum = 0;
    foreach ($values as $value) {
        $sum += $value;
    }
    return $sum;
}

$result = sum(1,2,3);
//echo "$result \n";

function stringJoin(string $separator, string...$parts){
    return implode($separator, $parts);
}
//echo stringJoin('-',1,2,3),"\n";

function calc($operation, int  ... $values){
    $tot = 0;

    for($i = 0; $i <count($values); $i++){
    switch ($operation) {
        case '+':
    $tot += $values[$i];
            break;
        case '*':
        if($i == 0){
            $tot = 1;
        }
        $tot *= $values[$i];
            break;
        case '-':
        $tot -= $values[$i];
            break;
        case '/':
       $tot /= $values[$i];
            break;
        default:
            echo'operation error';
        break;
    }

    }
    return $tot;
}

echo calc('/',10,10), "\n";