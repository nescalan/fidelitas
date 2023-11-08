$(document).ready(function () {
  $("#btn-favoritos").click(function () {
    // Obtener los valores del DOM utilizando jQuery
    let faviId = $("#card-subtitle").text(),
      faviName = $("#card-title").text(),
      faviType = $("#pill-left").text(),
      faviAbility = $("#pill-right").text(),
      faviAttack = $("#stats-attack").text(),
      faviSpeed = $("#stats-speed").text();

    console.log("Clicked");

    $.ajax({
      type: "POST",
      dataType: "json",
      url: "assets/php/insertFavorites.php",
      data: {
        id: faviId,
        name: faviName,
        type: faviType,
        ability: faviAbility,
        attack: faviAttack,
        speed: faviSpeed,
      },
      complete: function (data) {
        $("#resultado").html(data.responseText);
      },
    });
  });
});
