<?php

$somma = function($val1, $val2 ){
    echo ($val1 +$val2), "\n";
};
//$somma(2,3);

function test($func){
    $func(5,5);
}

test($somma);
