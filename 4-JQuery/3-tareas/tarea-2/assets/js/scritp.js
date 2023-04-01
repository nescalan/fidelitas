$(document).ready(() => {
  // Crear elemento cuadrado en pantalla
  const domCuadrado = $("#cuadrado");
  domCuadrado.css({
    position: "relative",
    width: "300px",
    height: "300px",
    "margin-bottom": "15px",
    border: "1px solid red",
  });

  // Crear botones
  const btnAgrandar = `<button id="agrandar">Agrandar</button>`;
  const btnEncoger = `<button id="encoger">Encoger</button>`;
  const btnDesvanecer = `<button id="desvanecer">Desvanecer</button>`;
  const btnAparecer = `<button id="aparecer">Aparecer</button>`;
  const btnCambiarColor = `<button id="fondo">Cambiar Color</button>`;
  const btnRebotar = `<button id="rebotar">Rebotar</button>`;
  const btnReiniciar = `<button id="reiniciar">Reiniciar</button>`;

  // Insertar botones
  domCuadrado.before(btnAgrandar);
  domCuadrado.before(btnEncoger);
  domCuadrado.before(btnDesvanecer);
  domCuadrado.before(btnAparecer);
  domCuadrado.before(btnCambiarColor);
  domCuadrado.before(btnRebotar);
  domCuadrado.after(btnReiniciar);

  //   Funciones de los Botones
  $("#agrandar").click(() => {
    $("#cuadrado").animate({
      width: "1000px",
      height: "1000px",
      borderWidth: "10px",
      opacity: 0.4,
      background: "#da8d8d",
    });
  });

  $("#encoger").click(() => {
    $("#cuadrado").animate({
      width: "100px",
      height: "100px",
      borderWidth: "1px",
    });
  });

  $("#desvanecer").click(() => {
    $("#cuadrado").fadeOut(300);
  });

  $("#aparecer").click(() => {
    $("#cuadrado").fadeIn(300);
  });

  $("#fondo").click(() => {
    $("#cuadrado").animate({ backgroundColor: "olive" }, "slow");
  });

  $("#rebotar").click(() => {
    for (var i = 1; i <= 3; i++) {
      $("#cuadrado").animate({ top: 30 }, "slow");
      $("#cuadrado").animate({ top: 0 }, "slow");
    }
  });

  $("#reiniciar").click(() => {
    $("#cuadrado").animate({
      position: "relative",
      width: "300px",
      height: "300px",
      "margin-bottom": "15px",
      border: "1px solid red",
      backgroundColor: "white",
    });
    $("#cuadrado").fadeIn(300);
  });
});
