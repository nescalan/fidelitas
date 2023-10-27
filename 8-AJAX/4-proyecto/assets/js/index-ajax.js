document.addEventListener("DOMContentLoaded", function () {
  // Captura del boton "buscar"
  const btnBuscar = document.getElementById("btn-buscar");
  const inputElement = document.getElementById("buscar");

  // Captura el momento en que pulsan la tecla "enter"
  inputElement.addEventListener("keydown", function (event) {
    if (event.key === "Enter" || event.keyCode === 13) {
      let txtPokemon = document.getElementById("buscar").value;
      txtPokemon = txtPokemon.toLowerCase();

      const validatedInputText = validateInputText(txtPokemon);
      inputElement.value = "";

      // CONDICIONAL:
      if (validatedInputText) {
        callApi(txtPokemon);
      }
    }
  });

  // Captura la acción del botón buscar
  btnBuscar.addEventListener("click", function () {
    let txtPokemon = document.getElementById("buscar").value;
    txtPokemon = txtPokemon.toLowerCase();

    const validatedInputText = validateInputText(txtPokemon);
    inputElement.value = "";

    // CONDICIONAL:
    if (validatedInputText) {
      callApi(txtPokemon);
    }
  });
});
