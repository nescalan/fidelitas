function cargarApi() {
  const txtCedula = document.getElementById("txtCed").value;
  const xhttp = new XMLHttpRequest();

  xhttp.onload = function () {
    console.log(this.responseText);

    const inputElement = document.getElementById("txtCed").value;

    // CONDITIONAL: Check empty input
    if (!inputElement) {
      const errorMessage = `
        <div class="alert alert-danger" role="alert">
          <strong>Error!</strong> Debe ingresar una identificación.
        </div>`;
      document.getElementById("message").innerHTML = errorMessage;

      // Clear the 'nombre' input
      const nombreInput = document.getElementById("nombre");
      nombreInput.removeAttribute("disabled");
      nombreInput.value = "";
      nombreInput.setAttribute("disabled", true);

      // Clear the 'moroso' input
      const morosoInput = document.getElementById("moroso");
      morosoInput.removeAttribute("disabled");
      morosoInput.value = "";
      morosoInput.setAttribute("disabled", true);

      // Clear the 'descripcion' textarea
      const descripcionTextarea = document.getElementById("descripcion");
      descripcionTextarea.removeAttribute("disabled");
      descripcionTextarea.value = "";
      descripcionTextarea.setAttribute("disabled", true);
    } else {
      const response = JSON.parse(this.responseText);
      const successMessage = `
        <div class="alert alert-success" role="alert">
        ¡La consulta se realizó <strong>correctamente!</strong>
        </div>`;
      console.log(response.nombre);
      document.getElementById("message").innerHTML = successMessage;
      document.getElementById("nombre").value = response.nombre;
      document.getElementById("moroso").value = response.situacion.moroso;

      // CONDITIONAL: VAlidates if query is empty
      if (response.actividades.length === 0) {
        console.log("El arreglo está vacío");
        const actividades = "No hay datos disponibles";
        document.getElementById("descripcion").value = actividades;
      } else {
        console.log("El arreglo no está vacío");
        const actividades = `Estado: ${response.actividades[0].estado}\nTipo: ${response.actividades[0].tipo}\nCódigo: ${response.actividades[0].codigo}\nDescripción: ${response.actividades[0].descripcion} `;
        document.getElementById("descripcion").value = actividades;
      }
    }
  };

  xhttp.open(
    "GET",
    "https://api.hacienda.go.cr/fe/ae?identificacion=" + txtCedula
  );
  xhttp.send();
}
