//MAP

const provinces = {
    'TO':'TORINO',
    'MI':'MILANO',
};
const myFunc = () => {};
provinces[myFunc] = 'This is my func';
console.log('-----------');
    for(let key in provinces){
       // console.log(key);
       // console.log(typeof key);
    }
console.log('--------------');
    

//console.log(provinces[myFunc]);
//console.log(provinces.TO);
let mydict = new Map();
const name = 'string key';
const func = () =>{};
const obj = {name:'Ciao', lastName:'boh',};

mydict.set(name, 'this is a string');
mydict.set(func, 'this is a function');
mydict.set(obj, 'this is a object');
console.log('size of my dict = ' + mydict.size)

for([k,v] of mydict.entries() ){
    console.log(typeof k);
}
mydict.forEach(())