<?php

$prezzo_unitario = 50;
$quantita = 3;
$sconto = 10;

$prezzoTot = function($prezzo_unitario, $quantita){
    return $prezzo_unitario * $quantita;
};

$prezzoScontato = function($prezzoTotale, $sconto) {
    return $prezzoTotale - ($prezzoTotale * $sconto / 100);
};

$totale = $prezzoTot($prezzo_unitario, $quantita);
$totaleScontato = $prezzoScontato($totale, $sconto);
echo "$totale" . "\n";
echo "$totaleScontato" . "\n";