$(document).ready(() => {
  // ENLARGE PIZZA:

  $("#main-menu").show(); // show the selected page
  $("#card-product").hide(); // hide the selected page

  $("nav label") // TOGGLE: Shopping cart toggle
    .children()
    .last()
    .click(() => {
      // TOGGLE: Function toggle()
      $("#main-page").toggle(
        () => {
          alert("First handler");
        },
        () => {
          alert("second handler");
          $(".sec-shopping-cart").attr({ display: "block" });
        }
      );
    });

  // MAIN MENU: paint menu on screen
  for (let i = 0; i < productsList.length; i++) {
    const domPizzaMenu = $("#menu");

    const menuTemplate = `
      <div  class="menu">
        <div class="menu-img">
          <p  class="text-title">Combo: <span id="product-list-${productsList[i].id}">${productsList[i].id}</span> </p>
          <img src="${productsList[i].image}" alt="${productsList[i].description}" width="100%" />
        </div>
        <div class="menu-info">
          <p id="text-title" class="text-title">${productsList[i].title}</p>
          <p class="text-body">
            ${productsList[i].description}
          </p>
          <span  class="text-title">$${productsList[i].price}</span>
          <span class="menu-button">
            <span
            id="add-to-cart"
              class="material-symbols-outlined products-description"
            >
              add_shopping_cart
            </span>
          </span>

          <div class="menu-footer">

          </div>
      </div>`;
    domPizzaMenu.append(menuTemplate);
  }

  // BUYING PIZZA: Send pizza information to cart
  $("#menu").on("click", "#add-to-cart", function () {
    const self = $(this).closest("div");
    const domPizzaDescription = self.find("#text-title").text();
    const pizzaIndex = productsList.findIndex(
      (product) => product.title == domPizzaDescription
    );
    console.log(domPizzaDescription);
    console.log(pizzaIndex);
  });

  // PRODUCT DESCRIPTION: Shows product before shopping cart
  $(".products-description").click(() => {
    let domMainMenu = $("#main-menu");
    let domCardProduct = $("#card-product");
    let domProductContent = `
    <div class="product">
      <!-- LEFT COLUMN -->
      <div class="product-left">
        <div class="product-image-container">
        <img src="${productsList[0].image}" alt="${productsList[0].description}" width="100%" />
      </div>

      <!-- SELECT -->
      <div class="product-options">
        <label for="pizza-options">Choose an option:</label>
        <select id="pizza-options" name="pizza-options" >
          <option value="">--- Choose option ---</option>
          <option value="11.95">Medium: 8 slice pizza</option>
          <option value="19.95">Large: 12 slice pizza</option>
          <option value="8.95">Personal: 4 slice pizza</option>
        </select>
      </div>
      </div>

      <!-- RIGHT COLUMN -->
      <div class="product-right">
        <h3>${productsList[0].title}</h3>
        <h6>Combo: No1</h6>
        <span>Price: $${productsList[0].price}</span>

        <!-- SELECT -->
        <div class="product-prices">
          <select name="cars" id="cars">
            <option value=""> Qty: 1 </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="description">
          <p>Description:</p>
          <p>
          ${productsList[0].description}
          </p>
        </div>

        <button id="buy-btn" class="buy-btn">ADD TO CART</button>
      </div>
    </div>
    `;

    domMainMenu.hide(); // Hide the main menu
    domCardProduct.show();
    // domCardProduct.append(domProductContent).show();
  });

  // ANIMACION IMAGEN: Cantidad por precio unitario
  $(".product-image-container").mouseenter(function () {
    // do your stuff
    $(this).animate({
      width: "420px",
      height: "340px",
    });
  });
  $(".product-image-container").mouseleave(function () {
    // do your stuff
    $(this).animate({
      width: "345px",
      height: "280px",
    });
  });

  // DOM: Error Messages
  $("#pizza-options").change(function () {
    const domPizzaOptions = $("#pizza-options").val();
    $("#pizza-price").html(domPizzaOptions);
    const domPizzaQty = $("#pizza-quantity").val();
    const domErrorMessage = $("#message");

    if (domPizzaOptions == 0 && domPizzaQty == 0) {
      domMessage = "Select a size of pizza and the quantity to buy";
      domErrorMessage.fadeIn();
      result = 0;
    }
    if (domPizzaOptions == 0 && domPizzaQty != 0) {
      domMessage = "What size pizza are you going to buy?";
      domErrorMessage.fadeIn();
      result = 0;
    }
    if (domPizzaOptions != 0 && domPizzaQty == 0) {
      domMessage = "How many pizzas are you going to buy?";
      domErrorMessage.fadeIn();

      result = 0;
    }
    if (domPizzaOptions != 0 && domPizzaQty != 0) {
      let result = domPizzaOptions * domPizzaQty;
      $("#subtotal").html(result);
      domErrorMessage.fadeOut();
    }
    domErrorMessage.html(domMessage).css({
      margin: "0px 0px 20px",
      padding: "15px 35px 15px 15px",
      color: "#b94a48",
      "font-size": "14px",
      "line-height": "20px",
      "border-color": "#eed3d7",
      "border-radius": "4px",
      "border-style": "solid",
      "border-width": "1px",
      backgroundColor: "#f2dede",
    });
  });

  // DOM: Error Messages
  $("#pizza-quantity").change(function () {
    const domPizzaOptions = $("#pizza-options").val();
    $("#pizza-price").html(domPizzaOptions);
    const domPizzaQty = $("#pizza-quantity").val();
    const domErrorMessage = $("#message");

    if (domPizzaOptions == 0 && domPizzaQty == 0) {
      domMessage = "Select a size of pizza and the quantity to buy";
      domErrorMessage.fadeIn();
      result = 0;
    }
    if (domPizzaOptions == 0 && domPizzaQty != 0) {
      domMessage = "What size pizza are you going to buy?";
      domErrorMessage.fadeIn();
      result = 0;
    }
    if (domPizzaOptions != 0 && domPizzaQty == 0) {
      domMessage = "How many pizzas are you going to buy?";
      domErrorMessage.fadeIn();

      result = 0;
    }
    if (domPizzaOptions != 0 && domPizzaQty != 0) {
      let result = domPizzaOptions * domPizzaQty;
      $("#subtotal").html(result);
      domErrorMessage.fadeOut();
    }
    domErrorMessage.html(domMessage).css({
      margin: "0px 0px 20px",
      padding: "15px 35px 15px 15px",
      color: "#b94a48",
      "font-size": "14px",
      "line-height": "20px",
      "border-color": "#eed3d7",
      "border-radius": "4px",
      "border-style": "solid",
      "border-width": "1px",
      backgroundColor: "#f2dede",
    });
  });
});
