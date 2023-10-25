let client = new XMLHttpRequest();

client.open("GET", "assets/txt/generated.json"); // Preparamos la petición
client.send(); // Enviamos la consulta
console.log(client.responseText); // Consultamos el contenido de la respuesta

function getPokemon() {
  const nombre = document.getElementById("nombre").value;
  let xhttp = new XMLHttpRequest();
  const API = "https://pokeapi.co/api/v2/pokemon/";

  xhttp.onload = () => {
    console.log(xhttp.responseText);
    const response = JSON.parse(this.responseText);

    for (let i in response.result) {
      console.table(response.result[i]);
    }
  };

  xhttp.open("GET", `${API} ${nombre}`);
  xhttp.send();
}
