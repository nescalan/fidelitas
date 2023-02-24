"use strict";
// Variables
let discount, finalPrice, promotionCode, response, totalInvoice;
const TICKET_PRICE = 50;

// Information Request
response = confirm(
  "Do you have any promotional code? \nPress 'Cancel' to say NO or Press 'Ok' to say YES"
);

// Condicional If Statement
if (!response) {
  totalInvoice = `Total Invoice: ${TICKET_PRICE}`;
} else {
  promotionCode = prompt("Insert the promotional code: ").toLowerCase();
  alert(promotionCode);
  // Price discount
  if (promotionCode === "web15") {
    totalInvoice = TICKET_PRICE * 0.85;
  }
}
document.write(totalInvoice);

function myFunction() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
