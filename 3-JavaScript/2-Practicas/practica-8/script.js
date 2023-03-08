for (let cont = 0; cont <= 10; cont++) {
  document.getElementById("resp").innerHTML += cont * 10 + " ";
}

document.getElementById("resp").innerHTML += "<br />";

let i = 25;
while (i <= 50) {
  document.getElementById("resp").innerHTML += i + " ";
}

i = 70;
do {
  document.getElementById("resp").innerHTML += i + " ";
  i++;
} while (condition);
