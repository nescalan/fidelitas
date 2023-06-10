$(document).ready(function () {
  // Identify the div and button elements
  let $secDisplayInquilinos = $("#display-inquilinos");
  let $btnGuests = $("#btn-guests");
  let $secAddInquilinos = $("#add-inquilinos");
  let $btnAdd = $("#add-guests");

  // Hide secion "add-inquilinos"
  $($secAddInquilinos).css("display", "none");

  // Attach an event handler to the $btnGuests element
  $btnGuests.on("click", function () {
    // Hide the div element
    $secDisplayInquilinos.hide();
    $secAddInquilinos.show();
  });

  // Attach an event handler to the $btnGuests element
  $btnAdd.on("click", function () {
    // Hide the div element
    $secDisplayInquilinos.show();
    $secAddInquilinos.hide();
  });
});
