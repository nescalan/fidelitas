// 1.- setInterval function()
function intervalo(message) {
  console.log(message);
}

let setIntervalMessage = setInterval(() => {
  intervalo("The next message will be in two seconds... ");
}, 2000);

// 2.- setTime function()
let timeOutMessage = setTimeout(() => {
  console.log("Here I am after three seconds...");
}, 3000);

console.log(timeOutMessage);
