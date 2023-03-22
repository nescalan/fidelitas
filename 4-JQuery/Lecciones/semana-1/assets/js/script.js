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

  let arr = Object.entries(names);
  console.log(arr);

  // DOM: Get Name
  for (let i = 0; i < names.length; i++) {
    const element = names[i];
    console.log(`${i}  ${element[i]}`);
  }

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
