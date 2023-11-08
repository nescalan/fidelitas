// Espera a que el documento HTML se cargue completamente antes de ejecutar el código.
document.addEventListener("DOMContentLoaded", function () {
  // Cargando valores del DOM en variables
  const btnBuscar = document.getElementById("btn-buscar");
  const imgNewCard = document.getElementById("card-image");
  const inputElement = document.getElementById("buscar");
  const btnFavorites = document.getElementById("btn-favoritos");

  // Agrega un evento para detectar cuando se presiona una tecla en el elemento de entrada.
  inputElement.addEventListener("keydown", function (event) {
    // Comprueba si la tecla presionada es "Enter" o su código es 13.
    if (event.key === "Enter") {
      obtenerDatosApi();
    }
  });

  // Agrega un evento para detectar cuando se hace clic en el botón "buscar".
  btnBuscar.addEventListener("click", obtenerDatosApi);

  // Agrega un evento para detectar cuando queremos mostrar el detalle del Pokémon
  imgNewCard.addEventListener("click", function () {
    getDetail;
  });

  // Se encarga de todo el proceso para agregar un favorito
  // btnFavorites.addEventListener("click", function (event) {
  //   setFavorites(event);
  // });
});
