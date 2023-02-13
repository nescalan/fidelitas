class Character {
  // constructor method
  constructor(name = "", type = "Player", lifes = 5, energy = 10) {
    this.name = name;
    this.type = type;
    this.lifes = lifes;
    this.energy = energy;
  }

  //   getters
  getName() {
    return this.name;
  }

  //   setters
}
