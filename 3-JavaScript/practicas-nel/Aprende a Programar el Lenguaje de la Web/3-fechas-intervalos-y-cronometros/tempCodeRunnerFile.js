let birthDate = new Date(1975);
let actualDate = new Date();

actualDate = actualDate.getFullYear();

let age = birthDate - actualDate;
console.log(`The age is: ${age}`);
