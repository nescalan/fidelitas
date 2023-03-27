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
      .children(".creature")
      .last()
      .text("Cambio el gato por un perro");
    console.log("Resulst of first() function: ");
    console.log(resultFirst);
  }, 2000);

  // Elementos Padre
  let resultParent = $("#cat").parent();
  console.log("Resulst of PARENT: ");
  console.log(resultParent);

  // Elementos Padres
  let resultParents = $("#cat").parents();
  console.log("Resulst of PARENTS: ");
  console.log(resultParents);

  // closest()
  let resultClosest = $("#cat").closest(".category");
  console.log("Resulst of CLOSEST: ");
  console.log(resultClosest);
});
