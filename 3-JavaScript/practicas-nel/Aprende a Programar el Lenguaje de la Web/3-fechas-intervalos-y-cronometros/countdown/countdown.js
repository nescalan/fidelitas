document.addEventListener("DOMContentLoaded", function () {
  // Variables
  let diferencia;
  console.log("DOM content has loaded");
  // Your code to manipulate the DOM or perform other actions can go here

  // Almacena la fecha futura
  let countDownDate = new Date("Jan 1, 2019 00:00:00").getTime();
  console.log(countDownDate);

  // Intervalo que se repetirá cada segundo
  let tiempo = setInterval(() => {
    let now = new Date();
    diferencia = countDownDate - now;
  }, 1000);

  // Calculos
  let dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
  let horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60));
  let minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
  let segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

  document.getElementById("cuentaregresiva").innerHTML =
    "<h3>" + "Días: " + dias + " Horas: " + horas + "</h3>";
  console.log("No se que pasa");

  if (distancia < 0) {
    clearInterval(tiempo);
    document.getElementById(
      "cuentaregresiva"
    ).innerHTML = `<h3> !Feliz 2019 para todos! </h3>`;
  }
});
