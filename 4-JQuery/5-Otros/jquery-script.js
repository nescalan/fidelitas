$(document).ready(() => {
  // TOGGLE: Shopping cart toggle
  $("nav label")
    .children()
    .last()
    .click(() => {
      // TOGGLE: Function toggle()
      $("#main-page").toggle(
        () => {},
        () => {}
      );
    });

  // PAINT: paint menu on screen
  for (let i = 0; i < productsList.length; i++) {
    const domPizzaMenu = $("#menu");

    const menuTemplate = `
      <div class="menu">
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
            class="material-symbols-outlined"
            onclick="getProduct(${i})"
          >
            add_shopping_cart
          </span>
        </div>
      </div>`;
    domPizzaMenu.append(menuTemplate);
  }
});
