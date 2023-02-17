// Eventos
$(document).ready(function () {
  $("#button").on("click", function () {
    // This: significa el objeto que llamamos  $("#button")
    $(this).toggleClass("highlighted");
  });
});
