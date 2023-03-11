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
const pizzaImages = [
  "./images/pizza-cheese.jpg",
  "./images/pizza-pepperoni.jpg",
  "./images/pizza-vegetarian.jpg",
  "./images/pizza-rustica.jpg",
  "./images/pizza-delicious.jpg",
  "./images/pizza-tomato.jpg",
];

let orderedPizzas = [];
let orderedPrices = [];
let orderedImages = [];
let shoppingCartOrders, cartPrice;

// FUNCTIONS: For Buying Pizzas
function buyCheesePizza() {
  if (orderedPizzas.includes("Cheese Pizza")) {
    alert("This product is allready in the shoppong cart");
  } else {
    alert("Thanks for buying a pizza");
    orderedPizzas.push(pizzaOptions[0]);
    orderedPrices.push(priceList[0]);
    orderedImages.push(pizzaImages[0]);
  }

  newCartItem();
}

function buyPepperoniPizza() {
  if (orderedPizzas.includes("Pepperoni Pizza")) {
    alert("This product is allready in the shoppong cart");
  } else {
    alert("Thanks for buying a pizza");
    orderedPizzas.push(pizzaOptions[1]);
    orderedPrices.push(priceList[1]);
    orderedImages.push(pizzaImages[1]);
  }

  newCartItem();
}

function buyVegetarianPizza() {
  if (orderedPizzas.includes("Vegetarian Pizza")) {
    alert("This product is allready in the shoppong cart");
  } else {
    alert("Thanks for buying a pizza");
    orderedPizzas.push(pizzaOptions[2]);
    orderedPrices.push(priceList[2]);
    orderedImages.push(pizzaImages[2]);
  }

  newCartItem();
}

function buyRusticaPizza() {
  if (orderedPizzas.includes("Rustica Pizza")) {
    alert("This product is allready in the shoppong cart");
  } else {
    alert("Thanks for buying a pizza");
    orderedPizzas.push(pizzaOptions[3]);
    orderedPrices.push(priceList[3]);
    orderedImages.push(pizzaImages[3]);
  }

  newCartItem();
}

function buyDeliciousPizza() {
  if (orderedPizzas.includes("Delicious Pizza")) {
    alert("This product is allready in the shoppong cart");
  } else {
    alert("Thanks for buying a pizza");
    orderedPizzas.push(pizzaOptions[4]);
    orderedPrices.push(priceList[4]);
    orderedImages.push(pizzaImages[4]);
  }

  newCartItem();
}

function buyTomatoPizza() {
  if (orderedPizzas.includes("Tomato Pizza")) {
    alert("This product is allready in the shoppong cart");
  } else {
    alert("Thanks for buying a pizza");
    orderedPizzas.push(pizzaOptions[5]);
    orderedPrices.push(priceList[5]);
    orderedImages.push(pizzaImages[5]);
  }

  newCartItem();
}

// ADD NEW CART
function newCartItem() {
  let quantityId = (document.getElementById("quantity").innerText =
    orderedPizzas.length);
  let cart = document.getElementById("cart");
  cart.innerHTML = "";
  console.log(cart);

  if (orderedPizzas.length === 0) {
    const emptyCartMessage = `
    <div>
      <h2>¡Hay un carrito por llenar!</h2>
      <br />
      <p>
        Actualmente no tienes productos en tu carrito de compras.
      </p>
    </div>
    `;
    cart.innerHTML = emptyCartMessage;
  }

  for (let i = 0; i < orderedPizzas.length; i++) {
    let cartItemTemplate = `
      <div class="cart-item">
        <img
          id="1-product-img"
          width="150px"
          src="${orderedImages[i]}"
          alt="Product Image"
        />
        <div class="item-details">
          <h3 id="1-product-name">${orderedPizzas[i]}</h3>
          <p>Price: $<span id="1-product-price">${orderedPrices[i]}</span></p>
          <input type="number" value="1" />
          <button class="remove" onclick="deleteCartItem(${i})">Remove</button>
        </div>
      </div>`;
    cart.innerHTML += cartItemTemplate;
  }
}

// DELETE ARTICLE
function deleteCartItem(index) {
  console.log("Antes");
  console.log(orderedPizzas);

  orderedPizzas.pop(pizzaOptions[index]);
  orderedPrices.pop(priceList[index]);
  orderedImages.pop(pizzaImages[index]);

  console.log("Despues");
  console.log(orderedPizzas);

  newCartItem();
}

// function getImage() {
//   let allImages = document.getElementsByTagName("img");
//   let imagesAlt;
//   let image;

//   for (let i = 0; i < allImages.length; i++) {
//     imagesAlt = allImages[i].alt;
//     console.log(`The alt text into imagesAlt is: ${imagesAlt}`);

//     switch (imagesAlt) {
//       case "cheese":
//         image = document.getElementById("product-one");
//         image.src = pizzaImages[0];
//         console.log(`Option Cheese: ${imagesAlt}`);
//         break;

//       case "pepperoni":
//         image = document.getElementById("product-two");
//         image.src = pizzaImages[1];
//         console.log(`Option Peperoni: ${imagesAlt}`);

//         break;

//       case "pepperoni":
//         image = document.getElementById("product-two");
//         image.src = pizzaImages[1];
//         break;

//       default:
//         break;
//     }
//   }
// }

// function printShoppingCart() {
//   let quantityId = (document.getElementById("quantity").innerText =
//     orderedPizzas.length);

//   for (let index = 0; index < orderedPizzas.length; index++) {
//     switch (index) {
//       case 0:
//         shoppingCartOrders = document.getElementById(
//           "1-product-name"
//         ).innerText = orderedPizzas[index];
//         shoppingCartOrders = document.getElementById(
//           "1-product-price"
//         ).innerText = orderedPrices[index];
//         shoppingCartOrders = document.getElementById("1-product-img");
//         shoppingCartOrders.src = orderedImages[index];
//         break;

//       case 1:
//         shoppingCartOrders = document.getElementById(
//           "2-product-name"
//         ).innerText = orderedPizzas[index];
//         shoppingCartOrders = document.getElementById(
//           "2-product-price"
//         ).innerText = orderedPrices[index];
//         shoppingCartOrders = document.getElementById("2-product-img");
//         shoppingCartOrders.src = orderedImages[index];
//         break;

//       case 2:
//         shoppingCartOrders = document.getElementById(
//           "3-product-name"
//         ).innerText = orderedPizzas[index];
//         shoppingCartOrders = document.getElementById(
//           "3-product-price"
//         ).innerText = orderedPrices[index];
//         shoppingCartOrders = document.getElementById("3-product-img");
//         shoppingCartOrders.src = orderedImages[index];
//         break;

//       default:
//         break;
//     }
//   }
// }
