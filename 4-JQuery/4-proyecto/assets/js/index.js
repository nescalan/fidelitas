$(document).ready(() => {
  // ENLARGE PIZZA:

  $("#main-menu").show(); // show the selected page
  $("#card-product").hide(); // hide the selected page

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

    // PRODUCT DESCRIPTION: Shows product before shopping cart
    let domMainMenu = $("#main-menu");
    let domCardProduct = $("#card-product");

    if (pizzaIndex.length != 0) {
      let domProductContent = `
      <div class="product">
        <!-- LEFT COLUMN -->
        <div class="product-left">
          <div class="product-image-container">
          <img src="${productsList[pizzaIndex].image}" alt="${
        productsList[pizzaIndex].description
      }" width="100%" />
        </div>
  
        <div class="select-container">
          <!-- SELECT -->
            <div class="product-options">
              <label for="pizza-options"><h5>Select Size:</h5></label>
              <select id="pizza-options" name="pizza-options" >
                <option value="">--- Choose option ---</option>
                <option value="${
                  productsList[pizzaIndex].price
                }">Medium: 8 slice pizza</option>
                <option value="${
                  productsList[pizzaIndex].large
                }">Large: 12 slice pizza</option>
                <option value="${
                  productsList[pizzaIndex].personal
                }">Personal: 4 slice pizza</option>
              </select>
            </div>

            <!-- SELECT -->
            <div class="product-prices">
            <label for="pizza-options"><h5>Quantity:</h5></label>
              <select name="qty" id="qty">
                <option value="0"> Qty: 0 </option>
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
          </div>

          <br>
          <div id="message"></div>
          
        </div>
  
        <!-- RIGHT COLUMN -->
        <div class="product-right">
          <h3 >${productsList[pizzaIndex].title}</h3>
          <h4>Combo: No ${pizzaIndex + 1}</h4>
            <span>
              <b>Price</b>: $
              <span id="id-price">${productsList[pizzaIndex].price}</span>
            </span>
            <div class="description">
            <br>
              <p><b>Description</b>:</p>
              <p>
              ${productsList[pizzaIndex].description}
              </p>
            </div>
            <br>
            <br>
    
            <p><b>Subtotal</b>: $ <span id="subtotal">0</span></p>
        </div>
      </div>
      `;

      domMainMenu.hide(); // Hide the main menu
      domCardProduct.append(domProductContent).show();
    }
    // PIZZA PRICES: price calculation with product options
    $("#card-product").on("change", "#pizza-options", function () {
      const parent = $(this).parent().parent();
      const selfOption = $(this).val();
      const domPizzaQty = parent.find("#qty").val();
      const domErrorMessage = parent.parent().find("#message");
      let domMessage;

      console.log(domErrorMessage);

      // ERROR MESSAGES: Option and Quantity
      if (selfOption == 0 && domPizzaQty == 0) {
        domMessage = "Select a size of pizza and the quantity to buy";
        domErrorMessage.fadeIn();
        result = 0;
      }
      if (selfOption == 0 && domPizzaQty != 0) {
        domMessage = "What size pizza are you going to buy?";
        domErrorMessage.fadeIn();
        result = 0;
      }
      if (selfOption != 0 && domPizzaQty == 0) {
        domMessage = "How many pizzas are you going to buy?";
        domErrorMessage.fadeIn();

        result = 0;
      }
      if (selfOption != 0 && domPizzaQty != 0) {
        let result = selfOption * domPizzaQty;
        result = result.toFixed(2);
        parent.parent().parent().find("#id-price").text(selfOption);
        parent.parent().parent().find("#subtotal").text(result);
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

      console.log(`Opt: ${selfOption} | Qty: ${domPizzaQty} | Res: ${result}`);
    });

    // PIZZA PRICES: price calculation with product Quantity
    $("#card-product").on("change", "#qty", function () {
      const parent = $(this).parent().parent();
      const selfQty = $(this).val();
      const domPizzaOption = parent.find("#pizza-options").val();
      const domErrorMessage = parent.parent().find("#message");
      let domMessage;

      // ERROR MESSAGES: Quantity
      if (domPizzaOption == 0 && selfQty == 0) {
        domMessage = "Select a size of pizza and the quantity to buy";
        domErrorMessage.fadeIn();
        result = 0;
      }
      if (domPizzaOption == 0 && selfQty != 0) {
        domMessage = "What size pizza are you going to buy?";
        domErrorMessage.fadeIn();
        result = 0;
      }
      if (domPizzaOption != 0 && selfQty == 0) {
        domMessage = "How many pizzas are you going to buy?";
        domErrorMessage.fadeIn();

        result = 0;
      }
      if (domPizzaOption != 0 && selfQty != 0) {
        let result = selfQty * domPizzaOption;
        result = result.toFixed(2);
        parent.parent().parent().find("#id-price").text(domPizzaOption);
        parent.parent().parent().find("#subtotal").text(result);
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
});
