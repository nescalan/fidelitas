function pruebaAjax() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    console.log(this.responseText);
    alert(this.responseText);
  };

  xhttp.open("GET", "txt/prueba.txt");
  xhttp.send();
}

function cargar(texto) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    console.log(this.responseText);
    document.getElementById("img").innerHTML = this.responseText;
  };
  xhttp.open("GET", "txt/" + texto + ".txt");
  xhttp.send();
}

function cargarApi() {
  const txtCedula = document.getElementById("txtCed").value;
  const xhttp = new XMLHttpRequest();

  xhttp.onload = function () {
    const response = JSON.parse(this.responseText);
    console.log(response.result[0]);

    for (let i in response.result) {
      console.table(response.result[i]);
    }
  };
  //   xhttp.open("GET", "https://apis.gometa.org/cedulas/305360584");
  xhttp.open("GET", "https://apis.gometa.org/cedulas" + txtCedula);
  xhttp.send();
}
