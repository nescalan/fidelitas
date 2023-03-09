"use strict";

let nombreUsuario = "Nelson gonzalez";

function mensajeSaludo(usuario) {
  const mensaje = `Bienvenido ${usuario}`;
  const curso = "HTML e Internet";
  console.log(`${mensaje} usted ha comprado el curso de: ${curso}`);
  console.log("");
}

mensajeSaludo(nombreUsuario);
