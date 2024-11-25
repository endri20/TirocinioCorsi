var cities = [
    {name: 'TORINO', reg:'PIE'},
    {name: 'ASTI', reg:'PIE'},
    {name: 'MILANO', reg:'LOM'},
    {name: 'COMO', reg:'LOM'},
];

var city = document.getElementById('city');
var ul = document.createElement('ul');

cities.forEach(function(ele) {
    var li = document.createElement('li');
    li.innerHTML = ele.name;
    ul.appendChild(li);
});

city.appendChild(ul);