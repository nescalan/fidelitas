// Variables
let nombre, primerApellido, segundoApellido, nombreCompleto, saludo;

// Captura de los datos
nombre = prompt("Ingrese su Nombre sin apellidos: ");
primerApellido = prompt("Ingrese su primer apellido: ");
segundoApellido = prompt("Ingrese su segundo apellido: ");
nombreCompleto = " " + nombre + " " + primerApellido + " " + segundoApellido;

console.log(nombreCompleto);

// Presentar la informacion
saludo = document.getElementById("mensaje").innerText;
console.log(saludo);
document.getElementById("mensaje").innerHTML = saludo + nombreCompleto;

// const myHeading = document.getElementById("my-heading");
// const headingText = myHeading.innerText;
// console.log(headingText);
// Output: "Hello, world!"
