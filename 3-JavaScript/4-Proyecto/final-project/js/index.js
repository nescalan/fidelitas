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
            <p>Price: $<span id="1-product-price-${i}">${orderedPrices[i]}</span></p>
            <p>Subtotal: $<span id="subtotal"> --</span></p>

            <input id="quantity-${i}" type="number" value="1" onchange="setUnitPrices(${i})" />
            <button class="remove" onclick="deleteCartItem(${i})">Remove</button>
          </div>
        </div>`;
      cart.innerHTML += cartItemTemplate;
      totalPrices.push(orderedPrices[i]);
    }
  }

  setTotalPay(totalPrices);
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
    orderSummary.innerHTML = totalPay;
  } else {
    orderSummary.innerHTML = totalPay;
    checkout.innerHTML = checkoutInfo;
  }
}

// FUNCTION CHANGE PRICE: Allows you to make individual price changes
function setUnitPrices(index) {
  let domProductQty = document.getElementById(`quantity-${index}`).value;

  let domProductPrice = document.getElementById(
    `1-product-price-${index}`
  ).innerText;

  let subtotal = domProductPrice * domProductQty;

  subtotal = subtotal.toFixed(2);

  let domSubtotal = (document.getElementById("subtotal").innerText = subtotal);

  console.log(
    `domProductPrice: ${domProductPrice} | 
    Cantidad: ${domProductQty} | 
    Subtotal: ${subtotal} `
  );

  if (domProductQty < 1) {
    console.log("La cantidad es menor a uno");
    deleteCartItem(index);
  }
}

// FUNCTION: Delete Article
function deleteCartItem(index) {
  orderedPizzas.splice(index, 1);
  orderedPrices.splice(index, 1);
  orderedImages.splice(index, 1);

  newCartItem();
}
// FUNCTION: suma de precios
// function sumaPrecios(index) {
//   let domProductQty = [];
//   let result = [];
//   let subtotal = [];
//   let total = 0;
//   let totalPrices = [];

//   // DOM: Manipulation
//   domProductQty[index] = document.getElementById(`quantity-${index}`).value;
//   let domSubtotal = (document.getElementById("subtotal").innerText = subtotal);

//   if (domProductQty < 1) {
//     console.log("La cantidad es menor a uno");
//     deleteCartItem(index);
//   } else {
//     console.log("---------------------------");
//     // console.log(
//     //   `Index: ${index} | Ordered Prices ${orderedPrices[index]} | length ${orderedPrices.length} `
//     // );

//     // Recorre el arreglo y suma los elementos
//     for (var i = 0; i < orderedPrices.length; i++) {
//       console.log(`Index: ${index} | Product Quantity:  ${domProductQty[index]}`);
//       console.log(`Index: ${index} | Ordered Prices ${orderedPrices[index]}`);
//       subtotal[index] = domProductQty[index] * orderedPrices[index];
//       subtotal[index];
//       console.log(`Index: ${index} | Subtotal ${subtotal[index]}`);
//     }

//     const numbers = [1.2345, 2.3456, 3.4567, 4.5678];

//     const roundedNumbers = numbers.map((number) => {
//       return Number(number.toFixed(2));
//     });

//     console.log(`Ejemplo ${roundedNumbers}`); // Output: [1.23, 2.35, 3.46, 4.57]
//   }
// }
