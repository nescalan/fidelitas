// Variables
let firstName = "Nelson Gonzalez";
let listOfNames = ["Nelson", "Marco", "Nathalia", "Jorge", "Tiffany"];
let persona = {
  nombre: "Marco",
  edad: 5,
  genero: "hombre",
};

// Existen dos tipos de funciones: Declarativas y de Expresión
/* Ejemplo de función declarativa */
function getName(persona) {
  return persona.nombre;
}
console.log(getName(persona));

// Ejemplo de función expresiva
const getEdad = function (persona) {
  return persona.edad;
};
console.log(getEdad(persona));

// Nuevo ejemplo de funciones
function saludarEstudiantes(estudiante) {
  console.log(estudiante);
}
saludarEstudiantes("Nelson");
