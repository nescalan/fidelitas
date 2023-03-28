$(document).ready(() => {
  // SET: Pages background
  let $enlaces = $("#router a");

  $enlaces.click((e) => {
    e.preventDefault(); // prevent the default link behavior
    $("body").css(
      "background-image",
      "linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12)"
    );
  });

  // SET: Placeholder text
  $("#first-name").attr("placeholder", "Ingrese su Nombre");
  $("#last-name").attr("placeholder", "Ingrese sus Apellidos");
  $("#age").attr("placeholder", "Cuál es su edad");
  $("#datepicker").datepicker();

  // FORM VALIDATION:
  // let $firstName = $("first-name").val();
  let $lastName = $("#last-name").val();
  let $age = $("#age").val();

  $("#first-name").focusout(() => {
    const $errorMessage = `
    <div id="error-message">New Error Message</div>
    `;
    $("#message").html($errorMessage);
  });
});

{
  /* <script>
var focus = 0,
  blur = 0;
$( "p" )
  .focusout(function() {
    focus++;
    $( "#focus-count" ).text( "focusout fired: " + focus + "x" );
  })
  .blur(function() {
    blur++;
    $( "#blur-count" ).text( "blur fired: " + blur + "x" );
  });
</script> */
}
