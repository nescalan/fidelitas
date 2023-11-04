document.addEventListener("DOMContentLoaded", function () {
  // Cargando valores del DOM en variables
  const card = document.getElementById("card");

  const ajax = new XMLHttpRequest();

  ajax.open("GET", "consultar.php");

  ajax.onreadystatechange = function () {
    if (ajax.readyState === 4 && ajax.status === 200) {
      const response = JSON.parse(ajax.responseText);

      for (let i = 0; i < response.length; i++) {
        const tarjeta = document.createElement("div");
        tarjeta.className = "card card-dimentions mt-5 shadow mb-5"; // Agregar una clase para aplicar estilos a la tarjeta

        tarjeta.innerHTML = `
            <div class="card-body">
              <h4 class="card-title text-center">
                Código:
                <span id="id" class="ms-3">${response[i].id}</span>
              </h4>
              <div>
                <span><strong>Marca:</strong></span>
                <span id="marca" class="ms-3">${response[i].marca}</span>
              </div>
              <div>
                <span><strong>Categoría:</strong></span>
                <span id="categoria" class="ms-3">${response[i].categoria}</span>
              </div>
              <div>
                <span><strong>Modelo:</strong></span>
                <span id="modelo" class="ms-3">${response[i].modelo}</span>
              </div>
              <div>
                <span><strong>Memoria</strong></span>
                <span id="memoria" class="ms-3">${response[i].memoria}</span>
              </div>
              <div>
                <span><strong>Disco Duro:</strong></span>
                <span id="disco-duro" class="ms-3">${response[i].disco_duro}</span>
              </div>
            </div class="mb-5">
          `;
        card.appendChild(tarjeta); // Usar "tarjeta" en lugar de "elemento"
      }

      console.log(response);
    }
  };

  ajax.send();
});
