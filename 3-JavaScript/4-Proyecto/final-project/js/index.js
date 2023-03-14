let orderedPizzas = [];
let orderedPrices = [];
let orderedImages = [];
let shoppingCartOrders, cartPrice;

// DOM: Menu Options
document.addEventListener("DOMContentLoaded", function () {
  const domMenu = document.getElementById("menu");
  domMenu.innerText = "Listo";
  for (let i = 0; i < pizzaOptions.length; i++) {
    const menuTemplate = `
    <div class="menu">
    <div class="menu-img">
      <img src="${pizzaImages[i]}" alt="cheese" width="100%" />
    </div>
    <div class="menu-info">
      <p class="text-title">${pizzaOptions[i]}</p>
      <p class="text-body">
        ${descriptions[i]}
      </p>
    </div>
    <div class="menu-footer">
      <span class="text-title">$${priceList[i]}</span>
      <div class="menu-button">
        <span
          class="material-symbols-outlined"
          onclick="getProduct(${i})"
        >
          add_shopping_cart
        </span>
      </div>
    </div>`;
    domMenu.innerHTML += menuTemplate;
  }
});

// FUNCTION: For Buying Pizzas
function getProduct(index) {
  alert(`getProduct ${index}`);

  if (orderedPizzas.includes(pizzaOptions[index])) {
    setPurchasedProduct();
  } else {
    setThanks();
    orderedPizzas.push(pizzaOptions[index]);
    orderedPrices.push(priceList[index]);
    orderedImages.push(pizzaImages[index]);
  }

  newCartItem();
}

// ADD NEW CART
function newCartItem() {
  let cart = document.getElementById("cart");
  let quantityId = (document.getElementById("quantity").innerText =
    orderedPizzas.length);
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
      // totalPrices.push(orderedPrices[i]);
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

// FUNCTION BUTTON: Chekout
function setPurchase() {
  const checkout = document.getElementById("checkout");

  orderedPizzas.length = 0;

  alert("Purchased");
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
