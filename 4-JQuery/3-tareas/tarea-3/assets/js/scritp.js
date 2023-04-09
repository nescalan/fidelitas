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

  function calculateTasks() {
    // Set the number of tasks on left column
    let tasksListLength = tasksList.length;
    console.log(tasksListLength);
    $("#all-tasks").text(tasksListLength);

    // Select if the task is pending or not
    let pendingTasks = tasksList.filter((task) => !task.completed).length;
    $("#pending-tasks").text(pendingTasks);

    // Select if the task is pending or not
    const completedTasks = tasksList.filter((task) => task.completed).length;
    $("#completed-tasks").text(completedTasks);
  }
  // LEFT COLUMN **************************************************
  renderTasks();

  //  ******************** RIGHT COLUMN ******************************
  // ADD NEW TASK INTO THE ARRAY
  $("#new-task").keypress(function (event) {
    let keycode = event.keyCode ? event.keyCode : event.which;
    if (keycode == "13") {
      //   CAPTURA NUEVA TAREA
      let domNewTask = $("#new-task").val();
      let newTask = {
        description: domNewTask,
        completed: false,
      };
      let domAddedTask = $("#added-task");

      tasksList.unshift(newTask);
      console.log(tasksList);

      domAddedTask.append(domNewTask);

      $("#new-task").val("");
      clearUnusedElements();
      renderTasks();
      calculateTasks();
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
    clearUnusedElements();
    renderTasks();
  });
});
