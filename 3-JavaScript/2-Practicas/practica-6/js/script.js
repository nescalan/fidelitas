let respuesta = prompt("Cual es el nombre 'oficial' de JavaScript");
respuesta = respuesta.toLocaleLowerCase();

if (respuesta == "ecmascript") {
  alert("La respuesta es correcta...");
} else {
  alert("INCORRECTO: El nombre 'oficial' de JavaScript es ECMAScript");
}
