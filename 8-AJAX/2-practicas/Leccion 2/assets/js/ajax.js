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
    console.log(this.responseText);

    const response = JSON.parse(this.responseText);
    console.log(response.nombre);
    document.getElementById("nombre").value = response.nombre;
    document.getElementById("moroso").value = response.situacion.moroso;

    if (response.actividades.length === 0) {
      console.log("El arreglo está vacío");
      const actividades = "No hay datos disponibles";
      document.getElementById("descripcion").value = actividades;
    } else {
      console.log("El arreglo no está vacío");
      const actividades = `Estado: ${response.actividades[0].estado}\nTipo: ${response.actividades[0].tipo}\nCódigo: ${response.actividades[0].codigo}\nDescripción: ${response.actividades[0].descripcion} `;
      document.getElementById("descripcion").value = actividades;
    }
  };

  xhttp.open(
    "GET",
    "https://api.hacienda.go.cr/fe/ae?identificacion=" + txtCedula
  );
  xhttp.send();
}
