$(document).ready(function () {
  $("#example").on("click", "button.switch", function () {
    alert("Hey, you clicked the button...");
    $(this).parent().css("background-color", "burlywood");
    $(this).css("font-size", "2rem");
  });
});
