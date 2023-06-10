$(document).ready(function () {
  // Identify the div and button elements
  let $secDisplayInquilinos = $("#sec-display-guests");
  let $secAddInquilinos = $("#sec-add-guests");
  let $btnGuests = $("#btn-guests");
  let $btnBack = $("#btn-back");

  // Hide secion "add-inquilinos"
  $($secAddInquilinos).css("display", "none");

  // Attach an event handler to the $btnGuests element
  $btnGuests.on("click", function () {
    // Hide the div element
    $secDisplayInquilinos.hide();
    $secAddInquilinos.show();
  });

  // Attach an event handler to the $btnGuests element
  $btnBack.on("click", function () {
    // Hide the div element
    $secAddInquilinos.hide();
    $secDisplayInquilinos.show();
  });
});
