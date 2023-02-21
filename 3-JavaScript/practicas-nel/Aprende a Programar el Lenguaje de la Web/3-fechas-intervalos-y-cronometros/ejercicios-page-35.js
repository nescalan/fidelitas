// Calculate the age of a person
let birthDate = new Date(1975);
let fecha = new Date();

fecha = fecha.getFullYear();

let age = fecha - birthDate;
console.log(`The age is: ${age}`);

// Visualize the actual date on a web page
function fechaActual() {
  var d = new Date();
  document.getElementById("fecha").innerHTML = d.toLocaleDateString();
}
