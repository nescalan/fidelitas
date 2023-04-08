$(document).ready(function () {
  //Bind keypress event to input
  $("#new-task").keypress(function (event) {
    var keycode = event.keyCode ? event.keyCode : event.which;
    if (keycode == "13") {
      alert('You pressed a "enter" key in the input text');

      //   CAPTURA NUEVA TAREA
      let domNewTask = $("#new-task").val();
      let domAddedTask = $("#added-task");

      alert(domNewTask);
      domAddedTask.append(domNewTask);
    }
    //Stop the event from propogation to other handlers
    //If this line will be removed, then keypress event handler attached
    //at document level will also be triggered
    event.stopPropagation();
  });
});
