document.addEventListener("DOMContentLoaded", function () {
  // Captura del boton "buscar"
  const btnBuscar = document.getElementById("btn-buscar");

  // Captura la acción del botón buscar
  btnBuscar.addEventListener("click", function () {
    let txtPokemon = document.getElementById("buscar").value;
    txtPokemon = txtPokemon.toLowerCase();

    const validatedInputText = validateInputText(txtPokemon);

    // CONDICIONAL:
    if (validatedInputText) {
      callApi(txtPokemon);
    }
  });
});
