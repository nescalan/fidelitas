$(function () {
  $("h2")
    .css("background-color", "cornflowerblue")
    .css("margin-bottom", "4%")
    .css("padding", "5%")
    .css("font-size", "150%")
    .css("color", "white")
    .css("text-align", "center");

    $('#btnAgregar').on("click", function () {
        var fruta = $("#fruta").val();
    
        if (fruta == "") {
            $("#nuevaFruta").css("color", "red").text("Nueva fruta*");
            alert("Campo vacío. Por favor, introduce el nombre de la fruta.");
            $("#nuevaFruta").css("color", "red").append("*");
        } else {
            var existeFruta = false;
            $(".elemento").each(function(){
                if ($(this).text().toLowerCase() == fruta.toLowerCase()){
                    existeFruta = true;
                    return false;
                }
            });
    
            
            if (existeFruta){
                alert("La fruta ya está en la lista.");
                $("#fruta").val("");
            } else {
                $("#lista").append("<li class='elemento' value='1'>" + fruta + "</li>");
                $("#nuevaFruta").css("color", "black").text("Nueva fruta");
                $("#fruta").val("");
            }
        }
    });

    //OJO AQUI 
    //El problema es que la función .on("click") que agregas a los elementos .elemento no funciona con elementos que se agregan dinámicamente a la página después de que se carga la página.
    //En este caso, puedes seleccionar el elemento #lista como el elemento padre y luego adjuntar el evento de clic a los elementos .elemento:
    $("#lista").on("click", ".elemento, .select" , function () {
    //$(".elemento").on("click", function () {
        var valor = $(this).val();

        if (valor == 1) {
            $(this).css("border", "2px dashed cornflowerblue")
                .css("background-color", "lightgreen")
                .css("color", "lightseagreen")
                .attr("value", "2")
                .attr("class", "select");
        } else {
            $(this).css("border", "2px solid lightseagreen")
                .css("background-color", "white")
                .css("color", "cornflowerblue")
                .attr("value", "1")
                .attr("class", "elemento");
        }
    });

     
       //$("#btnEliminar").on("click", function () {
        //var elementos = $(".elemento");
       // for (let i = 0; i < elementos.length; i++) {
        //   const li = elementos[i];
        //   if ($(li).val() == 2){
         //      $(li).remove();
        //   }
       // }

       $("#btnEliminar").on("click", function () {
            $(".select").remove();
       });

    });

