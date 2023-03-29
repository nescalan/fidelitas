$(document).ready(() => {
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
});
