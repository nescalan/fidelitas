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
