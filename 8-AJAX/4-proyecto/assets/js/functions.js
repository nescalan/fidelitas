// VARIABLES: Declaración de variables
let pokeNombre, pokeImagen, pokeId, pokeType, pokeAbility;
let height, weight, category, abilities, experience;
let response = null;

//FUNCION: Activa y detiene al Loader
const spinner = (action) => {
  // Cargando valores del DOM en variables
  const spinner = document.getElementById("spinner");

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

  // Preparamos los datos para realizar la consulta a la API
  xhttp.open("GET", URL);

  xhttp.onload = function () {
    if (xhttp.status === 404) {
      // Prepara el mensaje de error
      const message = "El nombre ingresado no existe o está mal escrito.";
      handleApiError(message);
    } else if (xhttp.status >= 200 && xhttp.status < 300) {
      // Cargando valores en variables
      response = JSON.parse(xhttp.responseText);
      const secFirstCard = document.getElementById("sec-firstCard");

      // CONDICIONAL: Comprueba si el contenido interno del elemento 'mensaje' está vacío.
      if (mensaje.innerHTML.trim() !== "") {
        mensaje.innerHTML = "";
      }

      // Mostrar First Card
      secFirstCard.classList.remove("d-none");

      // Asignamos los datos obtenidos del JSON al DOM
      pokeImagen = response.sprites.other.dream_world.front_default;
      pokeNombre = capitalizeFirstLetter(response.name);
      pokeId = response.id;
      pokeType = capitalizeFirstLetter(response.types[0].type.name);
      pokeAbility = capitalizeFirstLetter(response.abilities[0].ability.name);
      height = response.height;
      weight = response.weight;
      experience = response.base_experience;

      // Cargamos los datos en la tarjeta de los pokémon
      document.getElementById("card-image").src = pokeImagen;
      document.getElementById("card-title").innerHTML = pokeNombre;
      document.getElementById("card-subtitle").innerHTML = pokeId;
      document.getElementById("pill-left").innerHTML = pokeType;
      document.getElementById("pill-right").innerHTML = pokeAbility;

      // Apaga el spinner
      spinner("off");
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

  // Oculta First Card
  document.getElementById("sec-firstCard").classList.add("d-none");

  // Muestra Second Card
  document.getElementById("sec-secondCard").classList.remove("d-none");

  //Impresion de valores por consola ***********
  console.log("API Data:", response);
  console.log(response.forms[0].name);
  // console.log(response.stats.length);

  // Asignamos los valores obtenidos del JSON al DOM
  assignImageToDom();
  assignStatsToDOM();
  assignDescriptionToDOM();
  assignAbilitiesToDOM();
};

// FUNCION: Asigna imágen en la tarjeta de los Pokémon Left-Column
const assignImageToDom = () => {
  document.getElementById("pokemon-name").innerHTML = pokeNombre;
  document.getElementById("img-left-col").src = pokeImagen;
};

// FUNCION: Asigna las estadísticas a la tarjeta del Pokémon
const assignStatsToDOM = () => {
  // Cargando valores del DOM en variables
  const cardStats = document.getElementById("stats-titles");
  cardStats.innerHTML = "";

  for (let i = 0; i < response.stats.length; i++) {
    let tarjeta = document.createElement("div");
    tarjeta.className = "col text-center"; // Agregar una clase para aplicar estilos a la tarjeta

    console.log(response.stats[i].stat.name);
    console.log(response.stats[i].base_stat);

    tarjeta.innerHTML = `
    <span  >
      <strong id="stats-${response.stats[i].stat.name}" clas="fs-48 text-white">${response.stats[i].base_stat}</strong>
      <br/>
      <strong class="fs-12">${response.stats[i].stat.name}</strong>
    </span>    
    `;
    cardStats.appendChild(tarjeta); // Usar "tarjeta" en lugar de "elemento"
  }
};
// FUNCION: Asigna la descripcion a la tarjeta del Pokémon 'Altura, Peso y Categoraia'
const assignDescriptionToDOM = () => {
  // Cargando valores del DOM en variables
  document.getElementById("desc-height").innerHTML = height;
  document.getElementById("desc-wight").innerHTML = weight;
  document.getElementById("desc-experience").innerHTML = experience;
};

// FUNCION: Asigna las estadísticas a la tarjeta del Pokémon
const assignAbilitiesToDOM = () => {
  let abilitiesFromApi = "";
  // Cargando valores del DOM en variables
  const abilites = document.getElementById("desc-abilities");
  abilites.innerHTML = "";

  for (let i = 0; i < response.abilities.length; i++) {
    abilitiesFromApi += response.abilities[i].ability.name;
    // Agregar una coma si no es el último elemento
    if (i < response.abilities.length - 1) {
      abilitiesFromApi += ", ";
    }
  }

  // Declaración de variables
  const tarjeta = document.createElement("div");

  tarjeta.innerHTML = `
    <span class="fs-5">${abilitiesFromApi}</span>
    `;
  abilites.appendChild(tarjeta);

  // Imprimir el resultado final fuera del bucle
  console.log("Abilities:");
  console.log(abilitiesFromApi);
};

const setFavorites = (e) => {
  // Cargando valores del DOM en variables
  let faviId = document.getElementById("card-subtitle").textContent,
    faviName = document.getElementById("card-title").textContent,
    faviType = document.getElementById("pill-left").textContent,
    faviAbility = document.getElementById("pill-right").textContent,
    faviAttack = document.getElementById("stats-attack").textContent,
    faviSpeed = document.getElementById("stats-speed").textContent;

  let parametros = `id=${faviId}&name=${faviName}&type=${faviType}&ability=${faviAbility}&attack=${faviAttack}&speed=${faviSpeed}`;
  console.log(
    `${faviId} | ${faviName} | ${faviType} | ${faviAbility} | ${faviAttack} | ${faviSpeed} | `
  );

  e.preventDefault();

  let peticion = new XMLHttpRequest();
  peticion.open("POST", "assets/php/insertFavorites.php");
};
