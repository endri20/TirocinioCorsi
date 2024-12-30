<?php

$name = "io";
$eta = 22;
$altezza =1.80;
$maschio = true;
$colori = ["verde", "blu","Nero"];

echo "Nome: $name, " .  gettype($name) . "\n";
echo "Età : $eta, ".gettype($eta) . "\n";
echo "Altezza: $altezza, ".gettype($altezza) . "\n";
echo "Sesso : $maschio, ".gettype($maschio) . "\n";
//echo "Colori: " . print_r($colori) .gettype($colori) . "\n";
echo "Colori: " . json_encode($colori) . ", Tipo: " . gettype($colori) . "\n";
