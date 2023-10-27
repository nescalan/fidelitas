// FUNCION: Recibe un string y devuelve una nueva cadena con la primera letra en mayúscula
function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

// FUNCION: Valida si el texto ingresado está vacío
const validateInputText = (txtPokemon) => {
  // Captura el "id" del mensaje de error
  const mensaje = document.getElementById("mensaje");

  // CONDICIONAL: Revisamos si la consulta está vacia
  if (!txtPokemon) {
    console.log("");
    const message = `
    <div class="alert alert-danger mt-3 text-center" role="alert">
      <strong>Error!</strong> Por favor, ingresar el nombre válido de un Pokémon.
    </div>`;
    mensaje.innerHTML = message;
    return false;
  } else {
    const message = `
    <div class="alert alert-success mt-3 text-center" role="alert">
    ¡La consulta se realizó <strong>correctamente!</strong>.
    </div>`;
    mensaje.innerHTML = message;
    return true;
  }
};

// FUNCION: Se utiliza para buscar un pokémon en la API
const callApi = (txtPokemon) => {
  const URL = `https://pokeapi.co/api/v2/pokemon/${txtPokemon}`;
  const xhttp = new XMLHttpRequest();
  let response;

  xhttp.open("GET", URL);

  // Preparamos los datos para realizar la consulta a la API

  xhttp.onload = function () {
    if (xhttp.status === 404) {
      // Handle the "not found" condition
      console.log("Resource not found");

      console.log(response);

      const message = `
      <div class="alert alert-danger mt-3 text-center" role="alert">
        <strong>Error!</strong> El nombre ingresado no existe o está mal escrito.
      </div>`;
      mensaje.innerHTML = message;
      //   const actividades = "No hay datos disponibles";
      //   document.getElementById("descripcion").value = actividades;
    } else if (xhttp.status >= 200 && xhttp.status < 300) {
      // Handle a successful response
      var response = JSON.parse(xhttp.responseText);
      console.log("Data:", response);

      console.log("El arreglo no está vacío");

      console.log(response);
      console.log(response.forms[0].name);
      const pokeNombre = capitalizeFirstLetter(response.forms[0].name);
      const pokeImagen = response.sprites.other.dream_world.front_default;
      const pokeType = capitalizeFirstLetter(response.types[0].type.name);
      const pokeAbility = capitalizeFirstLetter(
        response.abilities[1].ability.name
      );

      // Cargamos los datos en la tarjeta de los pokémon
      document.getElementById("card-title").innerHTML = pokeNombre;
      document.getElementById("card-image").src = pokeImagen;
      document.getElementById("pill-left").innerHTML = pokeType;
      document.getElementById("pill-right").innerHTML = pokeAbility;
    } else {
      // Handle other error cases
      console.log("An error occurred:", xhttp.status);
    }
  };

  xhttp.onerror = function () {
    // Handle network errors here
    console.error("Network error");
  };

  xhttp.send();
};

//FUNCION: Activa y detiene al Loader
const loader = () => {};
