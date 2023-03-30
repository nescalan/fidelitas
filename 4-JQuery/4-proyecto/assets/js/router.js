$(document).ready(function () {
  // get the router links
  let $links = $("#router a");

  // handle the click events of the links
  $links.click(function (e) {
    e.preventDefault(); // prevent the default link behavior
    $links.removeClass("active"); // remove the active class from all links
    $(this).addClass("active"); // add the active class to the clicked link
    let page = $(this).attr("href"); // get the page name from the link's href attribute
    $(".page").not(page).hide(); // hide all pages except the selected one

    $(page).show(); // show the selected page
  });
});
