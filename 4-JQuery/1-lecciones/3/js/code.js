$(document).ready(() => {
  $("img").css({ width: "60", height: "45%" });

  //AFTER:
  $("#after").click(function () {
    $("img").after("<b>After</b>");
  });

  //BEFORE:
  $("#before").click(() => {
    $("img").before("<b>Before</b>");
  });
  $("#append").click(() => {
    $("img").append("<b>Append</b>");
  });
});
