document.addEventListener("DOMContentLoaded", () => {
  // Cargando valores del DOM en variables
  let tblId = document.getElementById("tbl-id"),
    tblName = document.getElementById("tbl-name"),
    tblType = document.getElementById("tbl-type"),
    tblAbility = document.getElementById("tbl-ability"),
    tblAttack = document.getElementById("tbl-attack"),
    tblSpeed = document.getElementById("tbl-speed");

  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "assets/php/stringToJson.php");
  xhttp.onload = function () {
    const response = JSON.parse(this.responseText);
    // console.log(response);

    response.forEach((row) => {
      console.table(row);
    });
  };

  xhttp.send();
});
