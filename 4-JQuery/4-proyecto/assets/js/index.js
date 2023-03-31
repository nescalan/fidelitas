$(document).ready(() => {
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

  // PAINT: paint menu on screen
  for (let i = 0; i < productsList.length; i++) {
    const domPizzaMenu = $("#menu");

    const menuTemplate = `
      <div  class="menu">
        <div class="menu-img">
          <p class="text-title">Combo: ${[i + 1]}</p>
          <img src="${productsList[i].image}" alt="cheese" width="100%" />
        </div>
        <div class="menu-info">
          <p class="text-title">${productsList[i].title}</p>
          <p class="text-body">
            ${productsList[i].description}
          </p>
        </div>
        <div class="menu-footer">
          <span class="text-title">$${productsList[i].price}</span>
          <div class="menu-button">
            <span
              class="material-symbols-outlined products-description"
              onclick="getProduct(${i})"
            >
              add_shopping_cart
            </span>
          </div>
      </div>`;
    domPizzaMenu.append(menuTemplate);
  }

  $(".products-description").click(() => {
    let domMainMenu = $("#main-menu");
    let domCardProduct = $("#card-product");

    let domProductContent = `
    <div class="product">
    <!-- LEFT COLUMN -->
    <div class="product-left">
      <div class="product-image-container">
        <img src="./assets/images/pizza-cheese.jpg" alt="" width="100%" />
      </div>

      <!-- SELECT -->
      <div class="product-options">
        <label for="pizza-options">Choose an option:</label>
        <select name="pizza-options" id="pizza-options">
          <option value="">--- Choose option ---</option>
          <option value="medium">Medium: 8 Slices</option>
          <option value="medium">Medium: 8 Slices</option>
          <option value="large">Large</option>
          <option value="poersonal">Personal</option>
        </select>
      </div>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="product-right">
      <h3>Pizza Title</h3>
      <h6>Combo: No1</h6>
      <span>Price: $</span>

      <!-- SELECT -->
      <div class="product-prices">
        <label for="cars">Select a method:</label>
        <select name="cars" id="cars">
          <option value="">--- Choose option ---</option>
          <option value="delivery">Delivery</option>
          <option value="carryout">Carryout</option>
        </select>
      </div>
      <div class="description">
        <p>Description:</p>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Excepturi, sapiente!
        </p>
      </div>

      <button class="buy-btn">ADD TO CART</button>
    </div>
  </div>
    `;

    domMainMenu.hide();
    domCardProduct.append(domProductContent).show();
  });
});
