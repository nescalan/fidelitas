$(document).ready(function () {
  // FUNCTIONS
  function renderTasks() {
    tasksList.map((task) => {
      const domAddedTask = $("#added-task");
      const groupedTasks = `
        <div class="grouped-tasks">
          <input id="checkbox" type="checkbox" name="checkbox" onclick />
          <div id="task-description" class="task-description">${task.description}</div>
        </div>
      `;
      if (task.completed == false) {
        domAddedTask.append(groupedTasks);
      }
    });
  }

  function clearUnusedElements() {
    const domAddedTask = $("#added-task");
    domAddedTask.empty();
  }

  // LEFT COLUMN **************************************************
  renderTasks();
  // Set the number of tasks on left column
  let tasksListLength = tasksList.length;
  $("#all-tasks").text(tasksListLength);

  // Select if the task is pending or not
  let pendingTasks = tasksList.filter((task) => !task.completed).length;
  $("#pending-tasks").text(pendingTasks);

  // Select if the task is pending or not
  const completedTasks = tasksList.filter((task) => task.completed).length;
  $("#completed-tasks").text(completedTasks);

  // RIGHT COLUMN **************************************************
  // RENDER TASK ITEM INTO THE DOM WITH MAP FUNCTION

  // ADD NEW TASK INTO THE ARRAY
  //Bind keypress event to input
  $("#new-task").keypress(function (event) {
    var keycode = event.keyCode ? event.keyCode : event.which;
    if (keycode == "13") {
      //   CAPTURA NUEVA TAREA
      let domNewTask = $("#new-task").val();
      let domAddedTask = $("#added-task");
      domAddedTask.append(domNewTask);
    }
    //Stop the event from propogation to other handlers
    event.stopPropagation();
  });

  // MARK TASK AS COMPLETED
  $("#checkbox").change(function () {
    const domTaskDescription = $("#task-description").text();
    const taskIndex = tasksList.findIndex(
      (task) => task.description == domTaskDescription
    );
    tasksList[taskIndex].completed = true;
    // alert(taskIndex);
    clearUnusedElements();
    renderTasks();
  });

  // COMPLETE A TASK
  function completeTask(text) {
    const taskIndex = tasksList.findIndex((task) => task.description == text);
    tasksList[taskIndex].completed = true;
  }

  // ************************************************************************

  $(document)
    //Creamos la Funcion del Click
    .click(function () {
      //Creamos una Variable y Obtenemos el Numero de Checkbox que esten Seleccionados
      var checked = $("#checkbox:checked").length;
      $("p").text(
        "Tienes Actualmente " + checked + " Checkbox " + "Seleccionado(s)"
      ); //Asignamos a la Etiqueta <p> el texto de cuantos Checkbox ahi Seleccionados(Combinando la Variable)
    })
    .trigger("click"); //Simulamos el Evento Click(Desde el Principio, para que muestre cuantos ahi Seleccionados)
});
