document.addEventListener("DOMContentLoaded", function () {
  // Captura del boton "buscar"
  const btnBuscar = document.getElementById("btn-buscar");

  // Captura la acción del botón buscar
  btnBuscar.addEventListener("click", function () {
    let txtPokemon = document.getElementById("buscar").value;

    // Consultamos a la API
    callApi(txtPokemon);
  });
});
