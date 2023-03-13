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
  let totalPrices = [];
  cart.innerHTML = "";

  if (orderedPizzas.length == 0) {
    const emptyCartMessage = `
    <div>
      <h2>¡There's a cart to fill !</h2>
      <br />
      <p>
      You currently have no products in your shopping cart.
      </p>
    </div>
    `;
    cart.innerHTML = emptyCartMessage;
  } else {
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
      totalPrices.push(orderedPrices[i]);
    }
  }

  setTotalPay(totalPrices);
}

// DELETE ARTICLE
function deleteCartItem(index) {
  console.log("INDES");
  console.log(index);

  console.log("Antes");
  console.log(orderedPizzas);

  orderedPizzas.splice(index, 1);
  orderedPrices.splice(index, 1);
  orderedImages.splice(index, 1);

  newCartItem();
}

// ADD SHOPPING CART TOTAL
function setTotalPay(prices) {
  let total = 0;

  // SUM
  for (let i = 0; i < prices.length; i++) {
    const value = prices[i];
    total += value;
  }

  // TOFIXED: Set to decimal
  let totalInvoice = total.toFixed(2);
  let orderSummary = document.getElementById("total-pay");
  let checkout = document.getElementById("checkout");
  const totalPay = `
  <div class="cart-total">
    <p>Total: $${totalInvoice}</p>
  </div>
  `;
  let checkoutInfo = `
  <div class="checkout">
    <button>Checkout</button>
  </div>
  `;

  if (orderedPrices.length === 0) {
    alert("no tiene articlos");
    orderSummary.innerHTML = totalPay;
  } else {
    orderSummary.innerHTML = totalPay;
    checkout.innerHTML = checkoutInfo;
  }
}
