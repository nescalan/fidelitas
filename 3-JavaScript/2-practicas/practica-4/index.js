"use strict";

// Declaracion de variables
let monthlySales = ["Google", "Samsung", "Apple", "Xiaomi", "Huawei", "Honor"];
let xiaomiApple = ["Xiaomi", "Apple"];
let motorolaLG = ["Motorola", "LG"];
let primerLugar = "OnePlus";

// Impresion inicial
document.write(monthlySales + "<br>");

// Xiaomi adelanta a apple
monthlySales.splice(2, 2, xiaomiApple);

// Honor es eliminado
monthlySales.pop();

// Ingresan Motorola y LG
monthlySales.splice(1, 0, motorolaLG);

// Nuevo Primer Lugar
monthlySales.unshift(primerLugar);

// Impresion final
document.write("<br>");
document.write(`Posicion 1: ${monthlySales[0]} <br>`);
document.write(`Posicion 2: ${monthlySales[1]} <br>`);
document.write(`Posicion 3: ${monthlySales[2]} <br>`);
document.write(`Posicion 4: ${monthlySales[3]} <br>`);
document.write(`Posicion 5: ${monthlySales[4]} <br>`);
document.write(`Posicion 6: ${monthlySales[5]} <br>`);
