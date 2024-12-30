<?php

$frutti = ["mela", "banana", "arancia", "kiwi", "pera"];

array_push($frutti, "ananas");
array_shift($frutti);

$numeroDiElementi = count($frutti);
echo $numeroDiElementi . "\n";
echo "Array dei frutti: ";
print_r($frutti);