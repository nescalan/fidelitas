// Espera a que el documento HTML se cargue completamente antes de ejecutar el código.
document.addEventListener("DOMContentLoaded", function () {
  // Cargando valores del DOM en variables
  const btnBuscar = document.getElementById("btn-buscar");
  const inputElement = document.getElementById("buscar");
  const imgNewCard = document.getElementById("card-image");

  // Agrega un evento para detectar cuando se presiona una tecla en el elemento de entrada.
  inputElement.addEventListener("keydown", function (event) {
    // Comprueba si la tecla presionada es "Enter" o su código es 13.
    if (event.key === "Enter" || event.keyCode === 13) {
      // Obtiene el valor del elemento de entrada y lo convierte a minúsculas.
      let txtPokemon = inputElement.value.toLowerCase();

      // Valida el texto de entrada utilizando una función llamada validateInputText.
      const validatedInputText = validateInputText(txtPokemon);

      // Limpia el valor del elemento de entrada.
      inputElement.value = "";

      // Verifica si el texto de entrada es válido antes de realizar una acción.
      if (validatedInputText) {
        // Llama a una función llamada callApi con el texto de entrada.
        callApi(txtPokemon);
      }
    }
  });

  // Agrega un evento para detectar cuando se hace clic en el botón "buscar".
  btnBuscar.addEventListener("click", function () {
    // Obtiene el valor del elemento de entrada y lo convierte a minúsculas.
    let txtPokemon = inputElement.value.toLowerCase();

    // Valida el texto de entrada utilizando una función llamada validateInputText.
    const validatedInputText = validateInputText(txtPokemon);

    // Limpia el valor del elemento de entrada.
    inputElement.value = "";

    // Verifica si el texto de entrada es válido antes de realizar una acción.
    if (validatedInputText) {
      // Llama a una función llamada callApi con el texto de entrada.
      callApi(txtPokemon);
    }
  });

  // Agrega un evento para detectar cuando queremos mostrar el detalle del Pokémon
  imgNewCard.addEventListener("click", function () {
    getDetail;
  });
});
