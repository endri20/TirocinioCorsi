function creaContatore(val) {
  let contatore = 0; //inizializzo il contatore la prima volta che lo creo

  return function incremento() {
    contatore++;
    return contatore;
  };
}

container1 = creaContatore();
console.log(container1());
