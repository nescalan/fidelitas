// 1.- map()
const names = [
  { firstName: "Nelson", lastName: "Escalante" },
  { firstName: "Nathalia", lastName: "Rojas" },
  { firstName: "Marco", lastName: "Gonzalez" },
  { firstName: "Nelson", lastName: "Gonzalez" },
  { firstName: "Patricia", lastName: "Escalante" },
  { firstName: "Jorge", lastName: "Basilio" },
];
const justNames = names.map((elemento) => elemento.firstName);
console.log(`Esto son los nombres: ${justNames}`);

// 2.- filter()
const users = [
  { id: 1, posts: 2 },
  { id: 2, posts: 1 },
  { id: 3, posts: 5 },
  { id: 4, posts: 4 },
  { id: 5, posts: 3 },
];
const searchValue = "a";

const searchedNames = names.filter((user) => {
  const userFirstName = user.firstName;
  const userLastName = user.lastName;

  return userFirstName.includes(searchValue);
});

console.log(searchedNames);
