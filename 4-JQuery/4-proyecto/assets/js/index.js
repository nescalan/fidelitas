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
    $("#main-menu").hide(); // show the selected page
    $("#card-product").show(); // show the selected page
  });
});
