// Función: Se utiliza para buscar un pokémon en la API
const callApi = (pokemon) => {
  // Captura el "id" del mensaje de error
  const mensaje = document.getElementById("mensaje");

  // CONDICIONAL: Revisamos si la consulta está vacia
  if (!pokemon) {
    console.log("");
    const message = `
    <div class="alert alert-danger mt-3 text-center" role="alert">
      <strong>Error!</strong> Por favor, ingresar el nombre válido de un Pokémon.
    </div>`;
    mensaje.innerHTML = message;
  } else {
    const message = `
    <div class="alert alert-success mt-3 text-center" role="alert">
    ¡La consulta se realizó <strong>correctamente!</strong>.
    </div>`;
    mensaje.innerHTML = message;
  }
};
