$(document).ready(() => {
  // Variables
  const productsList = [
    {
      id: 1,
      image: "./assets/img/pizza-cheese.jpg",
      title: "Cheese Pizza",
      description:
        "Get our Manhattan Classic Cheese Pizza with your choice of sauce and crust.",
      price: 11.95,
    },
    {
      id: 2,
      image: "./assets/img/pizza-pepperoni.jpg",
      title: "Pepperoni Pizza",
      description:
        "Get our classic and Delicious Pepperoni pizza with your choice of sauce and crust.",
      price: 14.95,
    },
    {
      id: 3,
      image: "./assets/img/pizza-vegetarian.jpg",
      title: "Vegetarian Pizza",
      description:
        "Tomato Sauce, Mozzarella, Green Pepper, Onions, Fresh Mushrooms, Tomatoes, and Black Olives.",
      price: 12.95,
    },
    {
      id: 4,
      image: "./assets/img/pizza-rustica.jpg",
      title: "Rustica Pizza",
      description:
        "Tomato sauce, mozzarella, sausage, crispy bacon, roasted red peppers, and black olives.",
      price: 14.95,
    },
    {
      id: 5,
      image: "./assets/img/pizza-delicious.jpg",
      title: "Delicious Pizza",
      description:
        "A mix of Porcini Mushrooms and Truffle Paste, Mozzarella, Fresh Mushrooms, Caramelized Onions.        ",
      price: 15.95,
    },
    {
      id: 6,
      image: "./assets/img/pizza-tomato.jpg",
      title: "Tomato Pizza",
      description:
        "The Classic Marinara Sauce, Fresh Tomatoes, Mozzarella, Fresh Basil, and an Extra Virgin Olive Oil drizzle.",
      price: 13.95,
    },
  ];

  for (let index = 0; index < productsList.length; index++) {
    const domProductListItem = `
    <div class="menu">
      <p> Combo: ${productsList[index].id}</p>
      <div class="menu-img">
       <img src="${productsList[index].image}" alt="${productsList[index].description}" width="100%" />
      </div>

      <div class="menu-info">
        <p class="text-title">${productsList[index].title}</p>
        <p class="text-body">${productsList[index].description}</p>
      </div>

      <div class="menu-footer">
        <span class="text-title">$${productsList[index].price}</span>
        <div class="menu-button">
          <span
            class="material-symbols-outlined"
          >add_shopping_cart</span>
        </div>
      </div>


    </div>


    `;

    // DOM: Manipulation
    $(".product-list").append(domProductListItem);
    // $(".product-list").append(menuTemplate);
  }
});
