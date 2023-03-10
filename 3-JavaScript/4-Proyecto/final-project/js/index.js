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
let orderedImages = [];
let shoppingCartOrders, cartPrice;
let rusticaPizza;

// FUNCTIONS:
function buyCheesePizza() {
  orderedPizzas.push(pizzaOptions[0]);
  orderedPrices.push(priceList[0]);

  printShoppingCart();
}

function buyPepperoniPizza() {
  orderedPizzas.push(pizzaOptions[1]);
  orderedPrices.push(priceList[1]);
  printShoppingCart();
}

function buyVegetarianPizza() {
  orderedPizzas.push(pizzaOptions[2]);
  orderedPrices.push(priceList[2]);
  printShoppingCart();
}

function buyRusticaPizza() {
  orderedPizzas.push(pizzaOptions[3]);
  orderedPrices.push(priceList[3]);
  printShoppingCart();
}

function buyDeliciousPizza() {
  orderedPizzas.push(pizzaOptions[4]);
  orderedPrices.push(priceList[4]);
  printShoppingCart();
}

function buyTomatoPizza() {
  orderedPizzas.push(pizzaOptions[5]);
  orderedPrices.push(priceList[5]);
  printShoppingCart();
}

function printShoppingCart() {
  for (let index = 0; index < orderedPizzas.length; index++) {
    console.log(orderedPizzas[index]);
    console.log(index);

    switch (index) {
      case 0:
        shoppingCartOrders = document.getElementById(
          "1-product-name"
        ).innerText = orderedPizzas[index];
        shoppingCartOrders = document.getElementById(
          "1-product-price"
        ).innerText = orderedPrices[index];

        break;

      case 1:
        shoppingCartOrders = document.getElementById(
          "2-product-name"
        ).innerText = orderedPizzas[index];
        shoppingCartOrders = document.getElementById(
          "2-product-price"
        ).innerText = orderedPrices[index];
        break;

      case 2:
        shoppingCartOrders = document.getElementById(
          "3-product-name"
        ).innerText = orderedPizzas[index];
        shoppingCartOrders = document.getElementById(
          "3-product-price"
        ).innerText = orderedPrices[index];
        break;

      default:
        break;
    }
  }
}
