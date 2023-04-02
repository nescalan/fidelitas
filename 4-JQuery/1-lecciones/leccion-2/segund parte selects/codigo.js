//DOCUMET READY
$(function (){
$("p")
.css("color","rgb(0,50,0)")
.css("font-size","60px")
.css("background-color","green")
.css("text-align","center");

$("#titulo").css("color","rgb(80,0,0)");
$("#nombre").attr("placeholder","Ingrese su nombre");
$("#clave").attr("placeholder","Ingrese la paswword");
$("#clave").attr("type", "password");

$("button").css("border-radius", "50%");
$("button").css("background-image", "none");

$(".botones").css("background-color", "#3d71c4");

$(".borra").css("background-color", "#cf5753");

$("#nombre").on("keydown", function () {
    var $this = $(this);
    var val = $this.val();
    $this.val(val.toUpperCase());
  });

  ///Brinca de un input a otro
  $("input").on("keypress", function (event) {
    if (event.which == 13) {
      // Verificar si se ha presionado la tecla "Enter"
      $("input")
        .eq($("input").index(this) + 1)
        .focus(); // Cambiar el foco al siguiente campo de entrada
    }
  });

  $("#nombre").on("keyup", function () {
    $("#nombre").css("background-color", "lightgreen");

    if (this.value.length == 0) {
        $("#nombre").css("background-color", "#824141");
    }
});

//carga datos

$("#cargarDatos").on("click", function () {
    $("#nombre").val("Jonathan");
    $("#clave").val("123456");
    $("#tipo").val("4").change();
    $("#pasatiempos").val("Leer libros de Harry Potter");
});

$("#limpiarCampos").on("click", function () {
    $("#nombre").val("");
    $("#clave").val("");
    $("#tipo").val("").change();
    $("#pasatiempos").val("");
});

//dbclick

$("#enviarTexto").on("dblclick", function () {
    var nombre = $("#nombre").val();
    var tipoCliente = $("#tipo option:selected").text();
    var pasatiempos = $("#pasatiempos").val(); 

    var texto = "Su nombre es: " + nombre + " eres un cliente e tipo: " + tipoCliente + " y te gusta: " + pasatiempos;

    $("#contenido").text(texto);
});

//trae de una api usuarios NO OBLIGATORIO
$(document).ready(function() {
    $.getJSON('https://jsonplaceholder.typicode.com/users', function(data) {
      $.each(data, function(index, usuario) {
        $('#usuarios').append($('<option>', {
          value: usuario.id,
          text: usuario.name
        }));
      });
    });
  });

  ////

  $("#enviarHTML").on("dblclick", function () {
    var nombre = $("#nombre").val();
    var pasatiempos = $("#pasatiempos").val();
    var tipoCliente = $("#usuarios option:selected").text();

    $("#contenido").html(
        '<div class="card text-white bg-success mb-3">' + 
        '<div class="card-header">' + nombre + '</div>'+
        '<div class="card-header">' + tipoCliente + '</div>'+
        '<div class="card-body">'+
        '<h4 class="card-title">' + pasatiempos +'</h4>' +
        '</div></div>'
    );

});

///case
//change - (Solo funciona para elementos input, textarea, select)
$("#tipo").on("change", function () {
    var tipoCliente = $("#tipo").val();

    switch (tipoCliente) {
        case "1":
            $("body").css("background-color", "lightblue");
            break;
        case "2":
            $("body").css("background-color", "lightgray");
            break;
        case "3":
            $("body").css("background-color", "yellow");
            break;
        case "4":
            $("body").css("background-color", "lightcoral");
            break;
        case "5":
            $("body").css("background-color", "#375587");
            break;
        default:
            $("body").css("background-color", "white");
            break;
    }
});


// focus - se activa cuando un elemento html recibe el foco.
$("#pasatiempos").on("focus", function() {
    $("#pasatiempos").css("background-color", "lightblue");
});

// blur - se activa cuando un elemento html pierde el foco.
$("#pasatiempos").on("blur", function () {
    $("#pasatiempos").css("background-color", "lightcoral");
});


// prepend (izquierda o de primero)
$("#prependTitulo").on("click", function () {
    var tipoCliente = $("#tipo option:selected").text();
    $("h2").prepend("<b>" + tipoCliente + " </b>");

});



$("#prependLista").on("click", function () {
    $("ol").prepend("<li>Coyote</li>");
});

// append
$("#appendLista").on("click", function () {
    $("ol").append("<li>Caballo</li>");
});

$("#appendTitulo").on("click", function () {
    $("h2").append("<b> Jirafa</b>");
});

// hide
$("#hide").on("click", function () {
    $("#mani").hide();
});

// show
$("#show").on("click", function () {
    $("#mani").show();
});

$(".btn").on("click", function () {
    $(this).css("background-color", "lightcoral");
});

// remove
$("#remove").on("click", function () {
    var mani = "#mani";

    $(mani).remove();
});
















  








});