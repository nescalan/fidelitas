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

        </div>
  
        <!-- RIGHT COLUMN -->
        <div class="product-right">
        <h3 >${productsList[pizzaIndex].title}</h3>
        <h4>Combo: No ${pizzaIndex + 1}</h4>
          <span>
            <b>Price</b>: $
            <span id="id-price">${productsList[pizzaIndex].price}</span>
          </span>
    
          <div id="message"></div>
          
          <div class="description">
            <p><b>Description</b>:</p>
            <p>
            ${productsList[pizzaIndex].description}
            </p>
          </div>
  
          <p><b>Subtotal</b>: $ <span id="subtotal">0</span></p>
          <button id="buy-btn" class="buy-btn">ADD TO CART</button>
        </div>
      </div>
      `;

      domMainMenu.hide(); // Hide the main menu
      domCardProduct.append(domProductContent).show();

      // PIZZA PRICES: price calculation
      $("#card-product").on("change", "#pizza-options", function () {
        const selfOption = $(this).val();
        const parent = $(this).parent().parent();
        const domPizzaQty = parent.find("#qty").val();
        let result = selfOption * domPizzaQty;
        parent.parent().parent().find("#id-price").text(selfOption);
        parent.parent().parent().find("#subtotal").text(result);

        console.log(
          `Opt: ${selfOption} | Qty: ${domPizzaQty} | Res: ${result}`
        );

        // ERROR MESSAGES: Option and Quantity
      });
    }
  });
});
