//FUNCION: Activa y detiene al Loader
const spinner = (action) => {
  // Cargando valores del DOM en variables
  const spinner = document.getElementById("spinner");

  console.log(action);

  switch (action) {
    case "on":
      spinner.classList.add("spinner-border");
      break;

    case "off":
      spinner.classList.remove("spinner-border");
      break;
  }
};

// FUNCION: Recibe un string y devuelve una nueva cadena con la primera letra en mayúscula
function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

// FUNCION: Valida si el texto ingresado está vacío
const validateInputText = (txtPokemon) => {
  // CONDICIONAL: Revisamos si la consulta está vacia
  if (!txtPokemon) {
    // MENSAJE: Consulta con error
    const message = `
    <div class="alert alert-danger mt-3 text-center" role="alert">
      <strong>Error!</strong> <br /> Por favor, ingresar el nombre de un Pokémon.
    </div>`;
    mensaje.innerHTML = message;
    return false;
  } else {
    return true;
  }
};

// FUNCION: Esta función se ocupará de obtener los datos de la API de Pokémon
const obtenerDatosApi = () => {
  // Cargando valores de DOM en variables
  const inputElement = document.getElementById("buscar");
  const secSecondCard = document.getElementById("sec-secondCard");

  // Obtiene el valor del elemento de entrada y lo convierte a minúsculas.
  let txtPokemon = inputElement.value.toLowerCase();

  // Valida el texto de entrada utilizando una función llamada validateInputText.
  const validatedInputText = validateInputText(txtPokemon);
  console.log(validatedInputText);

  // Limpia el valor del elemento de entrada.
  inputElement.value = "";

  // Oculta Second Card
  secSecondCard.classList.add("d-none");

  // Verifica si el texto de entrada es válido antes de realizar una acción.
  if (validatedInputText) {
    // Llama a una función llamada callApi con el texto de entrada y activa el spinner.
    spinner("on");
    callApi(txtPokemon);
  }
};

// FUNCION: Se utiliza para buscar un pokémon en la API
const callApi = (txtPokemon) => {
  // Cargando valores del DOM en variables
  const URL = `https://pokeapi.co/api/v2/pokemon/${txtPokemon}`;
  const xhttp = new XMLHttpRequest();
  let response;

  xhttp.open("GET", URL);

  // Preparamos los datos para realizar la consulta a la API

  xhttp.onload = function () {
    if (xhttp.status === 404) {
      // Prepara el mensaje de error
      const message = "El nombre ingresado no existe o está mal escrito.";
      handleApiError(message);
    } else if (xhttp.status >= 200 && xhttp.status < 300) {
      // Cargando valores en variables
      var response = JSON.parse(xhttp.responseText);
      const secFirstCard = document.getElementById("sec-firstCard");

      // CONDICIONAL: Comprueba si el contenido interno del elemento 'mensaje' está vacío.
      if (mensaje.innerHTML.trim() !== "") {
        mensaje.innerHTML = "";
      }

      // Mostrar First Card
      secFirstCard.classList.remove("d-none");

      //Impresion de valores por consola
      console.log("Data:", response);
      console.log("El arreglo no está vacío");
      console.log(response);
      console.log(response.forms[0].name);

      // Asignamos los datos obtenidos del JSON al DOM
      const pokeImagen = response.sprites.other.dream_world.front_default;
      const pokeNombre = capitalizeFirstLetter(response.name);
      const pokeId = response.id;
      const pokeType = capitalizeFirstLetter(response.types[0].type.name);
      const pokeAbility = capitalizeFirstLetter(
        response.abilities[0].ability.name
      );

      // Cargamos los datos en la tarjeta de los pokémon
      document.getElementById("card-image").src = pokeImagen;
      document.getElementById("card-title").innerHTML = pokeNombre;
      document.getElementById("card-subtitle").innerHTML = pokeId;
      document.getElementById("pill-left").innerHTML = pokeType;
      document.getElementById("pill-right").innerHTML = pokeAbility;

      // Apaga el spinner
      spinner("off");
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

// FUNCION: Muestra mensaje de error cuando no encuentra un pokemon
const handleApiError = (message) => {
  // Captura el "id" en el DOM del mensaje de error
  const mensaje = document.getElementById("mensaje");

  // Cargando valores en variables
  const secFirstCard = document.getElementById("sec-firstCard");

  // Mostrar First Card
  secFirstCard.classList.add("d-none");

  // MENSAJE: Consulta con error
  const errorMessage = `
      <div class="alert alert-danger mt-3 text-center" role="alert">
        <strong>Error!</strong> <br /> ${message}
      </div>`;
  mensaje.innerHTML = errorMessage;

  // Apaga el spinner
  spinner("off");
};

// FUNCION: Muestra el detalle del Pokemón seleccionado
const getDetail = () => {
  // MENSAJE: Limpia el mensaje
  const message = `<div ></div>`;
  mensaje.innerHTML = message;
  console.log("Imagen pulsada");

  // Cargando valores del DOM en variables
  const secFirstCard = document.getElementById("sec-firstCard");
  const secSecondCard = document.getElementById("sec-secondCard");
  const pokemonName = document.getElementById("pokemon-name");

  // Oculta First Card
  secFirstCard.classList.add("d-none");
  // Muestra Second Card
  secSecondCard.classList.remove("d-none");

  // Cargamos los datos en la tarjeta de los pokémon
  pokemonName.innerHTML = pokeNombre;
  document.getElementById("pokemon-name").src = pokeImagen;
};
