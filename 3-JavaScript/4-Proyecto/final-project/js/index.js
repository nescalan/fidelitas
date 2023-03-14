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
  // alert(`getProduct ${index}`);

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
  let contador;
  let totalPrices = [];
  var sum = 0;
  let cart = document.getElementById("cart");
  let quantityId = (document.getElementById("quantity").innerText =
    orderedPizzas.length);
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
            <p>Subtotal: $<span id="subtotal${i}"> --</span></p>
            <input id="quantity-${i}" type="number" value="1" onchange="setUnitPrices(${i})" />
            <button class="remove" onclick="deleteCartItem(${i})">Remove</button>
          </div>
        </div>`;
      cart.innerHTML += cartItemTemplate;
      totalPrices.push(orderedPrices[i]);
    }

    // Recorre el arreglo y suma los elementos
    for (var i = 0; i < orderedPrices.length; i++) {
      sum += orderedPrices[i];
    }
  }

  setTotalPay(sum);
}

// ADD SHOPPING CART TOTAL
function setTotalPay(prices) {
  let orderSummary = document.getElementById("total-pay");
  let checkout = document.getElementById("checkout");

  const domTotalPay = `
  <div class="cart-total">
    <p>Total: $${prices}</p>
  </div>
  `;
  let domCheckoutInfo = `
  <div class="checkout">
    <button>Checkout</button>
  </div>
  `;

  if (orderedPrices.length === 0) {
    orderSummary.innerHTML = domTotalPay;
  } else {
    orderSummary.innerHTML = domTotalPay;
    checkout.innerHTML = domCheckoutInfo;
  }
}

// FUNCTION CHANGE PRICE: Allows you to make individual price changes
function setUnitPrices(index) {
  const domPrice = document.getElementById(
    `1-product-price-${index}`
  ).innerText;
  const domQuantity = document.getElementById(`quantity-${index}`).value;
  const domSubtotal = document.getElementById(`subtotal${index}`);

  let pricePerLine = domPrice * domQuantity;
  pricePerLine = pricePerLine.toFixed(2);
  domSubtotal.innerText = pricePerLine;
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
