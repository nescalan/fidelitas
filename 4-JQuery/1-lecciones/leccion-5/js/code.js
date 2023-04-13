$(document).ready(function () {
  $("#draggable1").draggable();
  $("#draggable2").draggable();
  $("#draggable").draggable();

  $("#droppable").droppable({
    drop: function (event, ui) {
      let valor = $(ui.draggable).attr("value");

      if (valor == 1) {
        $(this).addClass("soltable-lleno").find("p").text("Dejado");
        $(this).find("titulo").css({ color: "blue" });
        $(ui.draggable).find("g").html("Gracias");
      } else {
        $(ui.draggable).find("g").html("Nooo");
      }
    },
  });

  // SELECTABLE:
  $("#selectable").selectable();
});
