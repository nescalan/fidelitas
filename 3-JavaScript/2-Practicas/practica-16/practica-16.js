"use strict";

// Variables
let user, password;

user = prompt("Insert user name:").toLowerCase();

if (user == "" || user == undefined) {
  alert("El mensaje fue cancelado");
} else if (user != "admin") {
  alert("No te conozco.");
} else {
  password = prompt("Insert password:");

  if (password == "ElMejor") {
    alert("Bienvenido");
  } else {
    alert("Clave incorrecta.");
  }

  if (password == "" || password == null) {
    alert("Cancelado");
  }
}
