$(document).ready(function () {
  // 15. Evento click
  $("#button").on("click", function () {
    // This: significa el objeto que llamamos  $("#button")
    $(this).toggleClass("highlighted");
  });

  // 16.- Ejemplo del evento click
  $("#btnPick").on("click", function () {
    let selected = $("#secSelector select option:selected");
    let value = selected.val();
    let price = selected.data("price");

    if (price) {
      $("#result").html(`El viaje a ${value} cuesta ${price}`);
    }
  });
});
