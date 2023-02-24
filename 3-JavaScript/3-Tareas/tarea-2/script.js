"use strict";
// Variables
let finalPrice, promotionCode, response, spanElement, alertMessage;
const TICKET_PRICE = 50;

// Information Request
response = confirm(
  "Do you have any promotional code? \nPress 'Cancel' to say NO or Press 'Ok' to say YES"
);

// Condicional If Statement
if (!response) {
  alertMessage = "NO PROMO CODE: you have to pay the full price!!!";
  spanElement = document.getElementById("alert");
  spanElement.innerHTML = `${alertMessage}`;
  finalPrice = TICKET_PRICE;
} else {
  // Promotional Code Request
  promotionCode = prompt("Insert the promotional code: ").toLowerCase();

  // Price discount (15%, 10% or 5%)
  if (promotionCode === "web15") {
    finalPrice = TICKET_PRICE * 0.85;
  } else if (promotionCode === "web10") {
    finalPrice = TICKET_PRICE * 0.9;
  } else if (promotionCode === "web5") {
    finalPrice = TICKET_PRICE * 0.95;
  } else {
    alertMessage =
      "PLEASE ENTER A VALID CODE: This error message is displayed when the user enters an promotional code that is not correct.";
    spanElement = document.getElementById("alert");
    spanElement.innerHTML = `${alertMessage}`;
    finalPrice = TICKET_PRICE;
  }
}

// DOM Manipulation
spanElement = document.getElementById("promo");
spanElement.innerHTML = `$ ${finalPrice}`;
