<?php

$money = 3;

switch( $money ) {  
    case 1:
        echo" 1 Hai $money euro \n";
        break;
    case 2:
        echo"2 Hai $money euro \n";
        break;
    case 3:
        echo"3 Hai $money euro \n";
        break;
    default:
        echo "Non hai soldi";
        break;
}

match($money){
     1 => print("Hai 1 euro \n"),
    2 => print("Hai 2 euro \n"),
    3 => print("Hai 3 euro \n"),
    default => print("Non hai soldi \n"),
};
