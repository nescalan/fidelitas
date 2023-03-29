$(document).ready(() => {
  $("button").on("click", () => {
    let fontColor = Math.floor(Math.random() * 666666) + 1;
    let bgColor = Math.floor(Math.random() * 666666) + 1;
    fontColor = "#" + fontColor;
    bgColor = "#" + bgColor;
    alert(fontColor);
    $("p").css("color", fontColor).css("background-color", bgColor);
  });
});
