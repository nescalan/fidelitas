// 1.- setInterval function()
function intervalo(message) {
  console.log(message);
}

let setIntervalMessage = setInterval(() => {
  intervalo("The next message will be in two seconds... ");
}, 2000);

setInterval(() => {
  clearInterval(setIntervalMessage);
}, 10000);

// 2.- setTime function()
let timeOutMessage = setTimeout(() => {
  console.log("Here I am after three seconds...");
}, 3000);

// 3.- date function()
let actualDate = new Date();
console.log(actualDate);

// 3.1.- personal date
let myDate = new Date(1975, 00, 31);
console.log(myDate);

// 3.2.- date methods
let today = new Date();
today = actualDate.getMonth();

switch (today) {
  case 0:
    console.log("Today is Monday");
    break;
  case 1:
    console.log("Today is Tuesday");
    break;

  default:
    break;
}
