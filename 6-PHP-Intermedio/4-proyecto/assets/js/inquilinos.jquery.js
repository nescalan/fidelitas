$(document).ready(function () {
  // Identify the div and button elements
  let $secDisplayInquilinos = $("#display-inquilinos");
  let $btnGuests = $("#btn-guests");
  let $secAddInquilinos = $("#add-inquilinos");
  let $btnBack = $("#btn-back");

  // Hide secion "add-inquilinos"
  $($secAddInquilinos).css("display", "none");

  // Attach an event handler to the $btnGuests element
  $btnGuests.on("click", function () {
    // Hide the div element
    $secDisplayInquilinos.hide();
    $secAddInquilinos.show();
  });

  // Attach an event handler to the $btnBack element
  $btnBack.on("click", function () {
    // Hide the div element
    $secDisplayInquilinos.show();
    $secAddInquilinos.hide();
  });
});
