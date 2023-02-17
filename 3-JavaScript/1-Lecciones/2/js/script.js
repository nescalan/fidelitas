"use strict";

let provincias = ["Cartago", "Puntarenas", "Alajuela", "Heredia"];

document.write(`Provincia en la posicion #2: ${provincias[1]} <br>`);
document.write(`Provincia en la posicion #3: ${provincias[2]} <br>`);

provincias[0] = "Cartago";
document.write(`Provincia en la posicion #1: ${provincias[0]} <br>`);

let paises = [];
paises[0] = "Costa Rica";
paises[1] = "Guatemala";
paises[2] = "Peru";
paises[3] = "Argentia";

document.write(`Hemos ingresado diferentes paises: ${paises}<br>`);
document.write("<br>");

// pop()
paises.pop();
document.write(`Lista de paises despues del pop(): ${paises}<br>`);
document.write("<br>");

// push()
let pushContries = ["Canada", "Italia"];
paises.push(pushContries);
document.write(`Lista de paises despues del push(): ${paises}<br>`);
document.write("<br>");

// splice()
let myFish = ["angel", "clown", "mandarin", "sturgeon"];
document.write(`Lista de pescados antes del splice(): ${myFish}<br>`);
let removed = myFish.splice(2, 0, "drum");
document.write(`Lista de pescados despues del splice(): ${myFish}<br>`);
document.write("<br>");

// unshift() Agrega un elemento al principio del array
myFish.unshift("Marlene");
document.write(`Lista de pescados despues del unshift(): ${myFish}<br>`);
document.write("<br>");
