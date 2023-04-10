$(document).ready(function () {
  // Capture selected data
  $("#frutaSelect").change(function () {
    const domFruit = $(this).val();
    const domContenido = $("#contenido");

    // CREATE: Apple Card Template

    // SWITCH: for selected fruit
    switch (domFruit) {
      case "Manzana":
        const appleTemplate = `
        <div class="card">
            <div class="card-header">
            <p class="card-title">${domFruit}</p>
            </div>
            <div class="card-body">
            <a id="enlace-wikipedia" target="_blank">Wikipedia</a>
            <div id="apple-img" class="card-img-top"></div>
            </div>
        </div>
        `;
        let domApple = $("#contenido").find("#apple-img");
        if (domApple.length == 0) {
          domContenido.append(appleTemplate);
          // CREATE: Immage Insertion
          $("#contenido")
            .find("#apple-img")
            .append(
              " <img src='./assets/image/manzana.png' alt='manzana' width='100%'  />"
            );

          // CREATE: Wikipedia Link
          const wikiAppleLink = "https://es.wikipedia.org/wiki/Manzana";
          $("#contenido").find("#apple-img").prev().attr("href", wikiAppleLink);
        }
        break;

      case "Piña":
        const pineappleTemplate = `
        <div class="card">
            <div class="card-header">
            <p class="card-title">${domFruit}</p>
            </div>
            <div class="card-body">
            <a id="enlace-wikipedia" target="_blank">Wikipedia</a>
            <div id="pineapple-img" class="card-img-top"></div>
            </div>
        </div>
        `;
        let domPineapple = $("#contenido").find("#pineapple-img");
        if (domPineapple.length == 0) {
          domContenido.append(pineappleTemplate);

          // CREATE: Immage Insertion
          $("#contenido")
            .find("#pineapple-img")
            .append(
              " <img src='./assets/image/pina.jpg' alt='manzana' width='100%'  />"
            );

          // CREATE: Wikipedia Link
          const wikiPineappleLink =
            "https://es.wikipedia.org/wiki/Ananas_comosus";
          $("#contenido")
            .find("#pineapple-img")
            .prev()
            .attr("href", wikiPineappleLink);
        }

        break;

      case "Fresa":
        const strawberyTemplate = `
        <div class="card">
            <div class="card-header">
            <p class="card-title">${domFruit}</p>
            </div>
            <div class="card-body">
            <a id="enlace-wikipedia" target="_blank">Wikipedia</a>
            <div id="strawbery-img" class="card-img-top"></div>
            </div>
        </div>
        `;
        let domStrawbery = $("#contenido").find("#strawbery-img");
        if (domStrawbery.length == 0) {
          domContenido.append(strawberyTemplate);

          // CREATE: Immage Insertion
          $("#contenido")
            .find("#strawbery-img")
            .append(
              " <img src='./assets/image/fresa.jpg' alt='manzana' width='100%' height='95%'  />"
            );

          // CREATE: Wikipedia Link
          const wikiStrawbaryLink = "https://es.wikipedia.org/wiki/Fragaria";
          $("#contenido")
            .find("#strawbery-img")
            .prev()
            .attr("href", wikiStrawbaryLink);
        }

        break;

      case "Mango":
        const mangoTemplate = `
        <div class="card">
            <div class="card-header">
            <p class="card-title">${domFruit}</p>
            </div>
            <div class="card-body">
            <a id="enlace-wikipedia" target="_blank">Wikipedia</a>
            <div id="mango-img" class="card-img-top"></div>
            </div>
        </div>
        `;
        let domMango = $("#contenido").find("#mango-img");
        if (domMango.length == 0) {
          domContenido.append(mangoTemplate);

          // CREATE: Immage Insertion
          $("#contenido")
            .find("#mango-img")
            .append(
              " <img src='./assets/image/mango.jpg' alt='Mango' width='100%' height='70%' />"
            );

          // CREATE: Wikipedia Link
          const wikiMangoLink = "https://es.wikipedia.org/wiki/Mango";
          $("#contenido").find("#mango-img").prev().attr("href", wikiMangoLink);
        }

        break;

      case "Platano":
        const platanoTemplate = `
        <div class="card">
            <div class="card-header">
            <p class="card-title">${domFruit}</p>
            </div>
            <div class="card-body">
            <a id="enlace-wikipedia" target="_blank">Wikipedia</a>
            <div id="platano-img" class="card-img-top"></div>
            </div>
        </div>
        `;
        let domPlatano = $("#contenido").find("#platano-img");
        if (domPlatano.length == 0) {
          domContenido.append(platanoTemplate);

          // CREATE: Immage Insertion
          $("#contenido")
            .find("#platano-img")
            .append(
              " <img src='./assets/image/platano.jpg' alt='platano' width='100%' height='70%' />"
            );

          // CREATE: Wikipedia Link
          const wikiPlatanoLink = "https://es.wikipedia.org/wiki/Banana";
          $("#contenido")
            .find("#platano-img")
            .prev()
            .attr("href", wikiPlatanoLink);
        }

        break;

      case "Melon":
        const melonTemplate = `
        <div class="card">
            <div class="card-header">
            <p class="card-title">${domFruit}</p>
            </div>
            <div class="card-body">
            <a id="enlace-wikipedia" target="_blank">Wikipedia</a>
            <div id="melon-img" class="card-img-top"></div>
            </div>
        </div>
        `;
        let domMelon = $("#contenido").find("#melon-img");
        if (domMelon.length == 0) {
          domContenido.append(melonTemplate);

          // CREATE: Immage Insertion
          $("#contenido")
            .find("#melon-img")
            .append(
              " <img src='./assets/image/melon.jpg' alt='melon' width='100%' height='70%' />"
            );

          // CREATE: Wikipedia Link
          const wikiMelonLink = "https://es.wikipedia.org/wiki/Cucumis_melo";
          $("#contenido").find("#melon-img").prev().attr("href", wikiMelonLink);
        }

        break;

      case "Sandia":
        const sandiaTemplate = `
        <div class="card">
            <div class="card-header">
            <p class="card-title">${domFruit}</p>
            </div>
            <div class="card-body">
            <a id="enlace-wikipedia" target="_blank">Wikipedia</a>
            <div id="sandia-img" class="card-img-top"></div>
            </div>
        </div>
        `;
        let domSandia = $("#contenido").find("#sandia-img");
        if (domSandia.length == 0) {
          domContenido.append(sandiaTemplate);

          // CREATE: Immage Insertion
          $("#contenido")
            .find("#sandia-img")
            .append(
              " <img src='./assets/image/sandia.jpg' alt='sandia' width='100%' height='70%' />"
            );

          // CREATE: Wikipedia Link
          const wikisandiaLink = "https://es.wikipedia.org/wiki/Sandia";
          $("#contenido")
            .find("#sandia-img")
            .prev()
            .attr("href", wikisandiaLink);
        }

        break;

      case "Kiwi":
        const kiwiTemplate = `
        <div class="card">
            <div class="card-header">
            <p class="card-title">${domFruit}</p>
            </div>
            <div class="card-body">
            <a id="enlace-wikipedia" target="_blank">Wikipedia</a>
            <div id="kiwi-img" class="card-img-top"></div>
            </div>
        </div>
        `;
        let domKiwi = $("#contenido").find("#kiwi-img");
        if (domKiwi.length == 0) {
          domContenido.append(kiwiTemplate);

          // CREATE: Immage Insertion
          $("#contenido")
            .find("#kiwi-img")
            .append(
              " <img src='./assets/image/kiwi.jpg' alt='kiwi' width='100%' height='70%' />"
            );

          // CREATE: Wikipedia Link
          const wikikiwiLink = "https://es.wikipedia.org/wiki/kiwi";
          $("#contenido").find("#kiwi-img").prev().attr("href", wikikiwiLink);

          break;
        }

      default:
        $("#contenido").html("");

        break;
    }
  });
});
