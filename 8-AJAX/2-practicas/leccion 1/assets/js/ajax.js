function test(name) {
  alert(`This is ${name}`);
}

function pruebaAjax() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    alert(this.responseText);
  };

  xhttp.open("GET", "assets/txt/prueba.txt");
  xhttp.send();
}

function cargarPersonero(texto) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("img-left").innerHTML = this.response;
  };

  xhttp.open("GET", "assets/txt/" + texto + ".txt");
  xhttp.send();
}

function cargarTennis(texto) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("img-right").innerHTML = this.response;
  };

  xhttp.open("GET", "assets/txt/" + texto + ".txt");
  xhttp.send();
}
negro;
