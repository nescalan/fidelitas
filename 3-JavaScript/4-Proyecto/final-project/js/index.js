// Variables
const pizzaOptions = [
  "Cheese Pizza",
  "Pepperoni Pizza",
  "Vegetarian Pizza",
  "Rustica Pizza",
  "Delicious Pizza",
  "Tomato Pizza",
];
const priceList = [11.95, 14.95, 12.95, 15.95, 15.95, 13.95];

let orderedPizzas = [];
let orderedPrices = [];
let firstCartItem, secondCartItem;
let rusticaPizza;

// FUNCTIONS:
function buyCheesePizza() {
  orderedPizzas.push(pizzaOptions[0]);
  orderedPrices.push(priceList[0]);
  firstCartItem = document.getElementById("1-product-name").innerText =
    orderedPizzas[0];
  // firstCartItem = document.getElementById("0-product-name").innerText =
  //   orderedPizzas[0];

  console.log(orderedPizzas);
}

function buyPepperoniPizza() {
  orderedPizzas.push(pizzaOptions[1]);
  orderedPrices.push(priceList[1]);
  secondCartItem = document.getElementById("2-product-name").innerText =
    orderedPizzas[1];

  console.log(orderedPizzas);
}

function buyVegetarianPizza() {
  orderedPizzas.push(pizzaOptions[2]);
  orderedPrices.push(priceList[3]);
  secondCartItem = document.getElementById("3-product-name").innerText =
    orderedPizzas[2];

  console.log(orderedPizzas);
}

function buyRusticaPizza() {
  orderedPizzas.push(pizzaOptions[3]);
  orderedPrices.push(priceList[3]);
  rusticaPizza = document.getElementById("0-product-name").innerText =
    orderedPizzas[0];
}

function printShoppingCart(params) {}

// Updating the DOM in Shopping Cart
// const element = document.getElementById("product-name");
// element.innerText = orderedPizzas[0];
// console.log(element.innerText); // logs "New string"
