let client = new XMLHttpRequest();

client.open("GET", "assets/txt/generated.json"); // Preparamos la petición
client.send(); // Enviamos la consulta
console.log(client.responseText); // Consultamos el contenido de la respuesta
