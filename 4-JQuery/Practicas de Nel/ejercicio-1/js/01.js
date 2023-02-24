$(document).ready(function () {
  $("poem-stanza").addClass("highlight");

  // Hide elements
  $(this).click(function () {
    $(div).hide("#poem-stanza");
  });

  $("#hide").click(function () {
    $(this).prev().hide();
  });
});
