$(document).ready(function () {
  // Variables
  let nameMessage = "You must enter a valid name";

  $("#btn-one").click(function () {
    $("#name").val(nameMessage);
    $("#email").val(Math.floor(Math.random() * 900000) + 100000);
  });
  $("#btn-two").click(function () {
    $("#name, #email").val("");
  });
});
