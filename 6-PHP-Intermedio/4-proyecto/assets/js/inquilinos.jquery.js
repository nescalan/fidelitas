$(document).ready(function () {
  // Identify the div and button elements
  let $secDisplayInquilinos = $("#sec-display-guests");
  let $secAddInquilinos = $("#sec-add-guests");
  let $btnGuests = $("#btn-guests");
  let $btnBack = $("#btn-back");
  // let $btnCancelAddGuest = $("#btn-cancel-guest");

  // Hide secion "add-inquilinos"
  $($secAddInquilinos).css("display", "none");

  // Attach an event handler to the $btnGuests element
  $btnGuests.on("click", function () {
    // Hide the div element
    $secDisplayInquilinos.hide();
    $secAddInquilinos.removeClass("d-none");
    $secAddInquilinos.show();
  });

  // Attach an event handler to the $btnGuests element
  $btnBack.on("click", function () {
    // Hide the div element
    $secAddInquilinos.hide();
    $secDisplayInquilinos.show();
  });

  // Attach an event handler to the $btnCancelAddGuest element
  $btnCancelAddGuest.on("click", function () {
    // Hide the div element
    $secAddInquilinos.hide();
    $secDisplayInquilinos.show();
  });
});
