"use strict";
// Variables Declaration
let firstName, lastName, yearOfBirth, age, response;
const ACTUAL_YEAR = new Date(2023);

// Information Request
firstName = prompt("Insert your firts name: ");
lastName = prompt("Insert yor last name: ");
yearOfBirth = prompt("What is your year of birth: ");

// Calculating day of birth
age = ACTUAL_YEAR - yearOfBirth;

// Display message
console.log(age);
alert(
  `Welcome${firstName} ${lastName} now you are part of our family. \nWe have noticed that you have ${age} years that's wonderful.`
);
response = confirm(
  "Is the information displayed correct? \nPress 'Cancel' to say NO and 'Ok' to say YES"
);

// Conditional IF Statement
if (response) {
  alert("The data is valid, thanks for the confirmation.");
} else {
  alert("Lastimosamente, los datos contiene uno o mas errores.");
}
