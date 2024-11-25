function multiplication(a,b){
//Funzione annidata per calcolare il quadrato
    function quadrato(x){
        return x*x;
    }
//Ritorno il qudrato per il secondo valore
    return quadrato(a) * b;
}

console.log(multiplication(2,3));