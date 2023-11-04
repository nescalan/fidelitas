$(document).ready(function () {
  $("#crear").click(function () {
    const id = $("#id").val();
    const nombre = $("#nombre").val();
    const correo = $("#correo").val();
    const telefono = $("#telefono").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: "crear.php",
      data: { id: id, nombre: nombre, correo: correo, telefono: telefono },
      complete: function (data) {
        $("#resultado").html(data.responseText);
      },
    });
  });
});
