document.addEventListener("DOMContentLoaded", function () {
  // Captura del boton "buscar" y el "id" del mensaje de error
  const mensaje = document.getElementById("mensaje");
  const btnBuscar = document.getElementById("btn-buscar");

  // Captura la acción del botón buscar
  btnBuscar.addEventListener("click", function () {
    let pokemon = document.getElementById("buscar").value;
    alert(`Estás buscando al pokémon ${pokemon}`);
  });
});
