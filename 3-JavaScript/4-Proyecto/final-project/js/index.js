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
let firstProductName;

// FUNCTIONS:
function buyCheesePizza() {
  orderedPizzas.push("Cheese Pizza");
  orderedPrices.push(priceList[0]);

  console.log(orderedPizzas);

  // alert(
  //   `You just buy ${orderedPizzas[0]} and the price is $${orderedPrices[0]}`
  // );
}
function buyPepperoniPizza() {
  // orderedPizzas[0] = pizzaOptions[0];
  orderedPizzas.push(pizzaOptions[1]);
  orderedPrices.push(priceList[1]);

  console.log(orderedPizzas);
}
function buyVegetarianPizza() {
  orderedPizzas.push(pizzaOptions[2]);
  orderedPrices.push(priceList[2]);

  console.log(orderedPizzas);

  // alert(
  //   `You just buy ${orderedPizzas[0]} and the price is $${orderedPrices[0]}`
  // );
}
function buyRusticaPizza() {
  // orderedPizzas[0] = pizzaOptions[0];
  orderedPizzas.push(pizzaOptions[3]);
  orderedPrices.push(priceList[3]);

  console.log(orderedPizzas);
}

// Updating the DOM in Shopping Cart
firstProductName = document.getElementById("0-product-name");
firstProductName.innerText = orderedPizzas[1];

let quantity = document.getElementById("quantity");
let pizzaQuantity = orderedPizzas.length;
console.log(pizzaQuantity);
quantity.innerText = pizzaQuantity;
