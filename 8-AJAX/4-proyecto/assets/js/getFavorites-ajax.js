// Se espera a que el DOM se cargue antes de ejecutar el código
document.addEventListener("DOMContentLoaded", () => {
  // Obteniendo elementos del DOM
  let tblBody = document.getElementById("tbl-body");
  let xhttp = new XMLHttpRequest();

  spinner("on");

  xhttp.open("GET", "assets/php/stringToJson.php");

  // Definición de la función que se ejecuta cuando la solicitud se completa
  xhttp.onload = function () {
    // Parsear la respuesta como un objeto JSON
    const response = JSON.parse(this.responseText);

    // Verificar que la solicitud se realizó con éxito
    if (xhttp.status === 200) {
      let newRow = "";

      // Iterar sobre los objetos en la respuesta JSON
      response.forEach((row) => {
        // Crear una fila de tabla con los datos de cada objeto
        newRow += `
          <tr>
            <th scope="row">${row.id}</th>
            <td scope="col">${row.name}</td>
            <td scope="col">${row.type}</td>
            <td scope="col">${row.ability}</td>
            <td scope="col">${row.attack}</td>
            <td scope="col">${row.speed}</td>
          </tr>
        `;
      });

      // Agregar las filas a la tabla en el DOM
      tblBody.innerHTML = newRow;
      spinner("off");
    } else {
      // Si la solicitud no se completó correctamente, manejar el error
      handleApiError("Se ha producido un error");
    }
  };

  // Enviar la solicitud al servidor
  xhttp.send();
});