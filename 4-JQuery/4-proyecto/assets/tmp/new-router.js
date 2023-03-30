$(function () {
  var routes = {
    "/home": function () {
      console.log("Home page");
    },
    "/about": function () {
      console.log("About page");
    },
    "/contact": function () {
      console.log("Contact page");
    },
  };
  var router = Router(routes);
  router.init();
});
