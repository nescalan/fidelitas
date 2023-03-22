$(document).ready(function () {
  // Variables
  let firstName;
  let message;
  const names = [
    { firstName: "Nelson", lastName: "Escalante" },
    { firstName: "Nathalia", lastName: "Rojas" },
    { firstName: "Marco", lastName: "Gonzalez" },
    { firstName: "Nelson", lastName: "Gonzalez" },
    { firstName: "Patricia", lastName: "Escalante" },
    { firstName: "Jorge", lastName: "Basilio" },
  ];

  for (let i = 0; i < names.length; i++) {
    const element = names[i];
    let character = Object.values(element);

    console.log(character);

    let includesResponse = element.includes(element);

    if (condition) {
    }
  }

  // let character = {
  //   first_name: "Locke",
  //   last_name: "Cole",
  //   job: "Treasure Hunter",
  // };
  // let arr = Object.entries(character);
  // console.log(arr);

  //   DOM: Get Name
  // $("#submit").click(function () {
  //   // get text
  //   nombre = $("#first-name").val();

  //   // Validating the user
  //   for (let i = 0; i < names.length; i++) {
  //     if (names[i].firstName === nombre) {
  //       message = `El usuario ${nombre} ya esta registrado, intente con otro nombre.`;
  //       console.log(
  //         `${i} El usuario ${nombre} ya esta registrado, intente con otro nombre.`
  //       );
  //     } else {
  //       message = `Felicitaciones el usuario ${nombre} se registro con exito!!!`;
  //       console.log(
  //         `${i} Felicitaciones el usuario ${nombre} se registro con exito!!!`
  //       );
  //     }
  //   }
  //   $("#response").text(message);
  // });
});
