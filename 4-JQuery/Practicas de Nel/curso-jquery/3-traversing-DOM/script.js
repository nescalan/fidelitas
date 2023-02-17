$(document).ready(function () {
  // Metodo find()
  let resultFind = $("#animals").find(".creature");
  console.log("Resulst of the find() search: ");
  console.log(resultFind);

  // Metodo children()
  let resultChildren = $("#animals").children();
  console.log("Resulst of the Children search: ");
  console.log(resultChildren);

  setTimeout(function () {
    // Metodos first(), last(), prev(), next()
    let resultFirst = $("#animals")
      .children()
      .first()
      .children()
      .first()
      .next()
      .text("Cambio el gato por un perro");
    console.log("Resulst of first() function: ");
    console.log(resultFirst);
  }, 2000);
});
