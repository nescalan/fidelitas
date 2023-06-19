$(document).ready(function () {
  // Identify the div and button elements
  let $secDisplayHomes = $("#sec-display-homes");
  let $secAddHomes = $("#sec-add-home");
  let $btnHomes = $("#btn-homes");
  let $btnBack = $("#btn-back");
  let $btnAddHomes = $("btn-add-homes");

  // Attach an event handler to the $btnHomes element
  $btnHomes.on("click", function () {
    // Hide the div element
    $secDisplayHomes.hide();
    $secAddHomes.removeClass("d-none");
    $secAddHomes.show();
  });

  // Attach an event handler to the $btnHomes element
  $btnBack.on("click", function () {
    // Hide the div element
    $secAddHomes.hide();
    $secDisplayHomes.show();
  });

  // ***********
  // Validate the ID number field
  $("#id-home").on("blur", function () {
    let home = $(this).val();
    let errorHome = $(this).closest(".form-group").find(".text-danger");

    if (!home) {
      // Insert an error message in the HTML if it doesn't already exist
      if (!errorHome.length) {
        $(this).addClass("is-invalid");
        // Insert an error message in the HTML
        $(this)
          .closest(".form-group")
          .append(
            "<span class='text-danger'>El campo 'Número de Casa' es obligatorio.</span>"
          );
      }
    } else {
      $(this).removeClass("is-invalid");
      // Clear the error message if it exsists
      if (errorHome.length) {
        errorHome.remove();
      }
    }
  });

  // Validate the address field
  $("#address").on("blur", function () {
    let address = $(this).val();
    let erroraddress = $(this).closest(".form-group").find(".text-danger");

    if (!address) {
      // Insert an error message in the HTML if it doesn't already exist
      if (!erroraddress.length) {
        $(this).addClass("is-invalid");
        // Insert an error message in the HTML
        $(this)
          .closest(".form-group")
          .append(
            "<span class='text-danger'>El campo 'Dirección' es obligatorio.</span>"
          );
      }
    } else {
      $(this).removeClass("is-invalid");
      // Clear the error message if it exsists
      if (erroraddress.length) {
        erroraddress.remove();
      }
    }
  });

  // Validate the phone number field
  $("#phone").on("blur", function () {
    let phone = $(this).val();
    let errorPhone = $(this).closest(".form-group").find(".text-danger");

    if (!phone) {
      // Insert an error message in the HTML if it doesn't already exist
      if (errorPhone.length === 0) {
        $(this).addClass("is-invalid");
        // Insert an error message in the HTML
        $(this)
          .closest(".form-group")
          .append(
            "<span class='text-danger'>El campo 'Teléfono' es obligatorio.</span>"
          );
      }
    } else if (!/^[0-9]{8}$/.test(phone)) {
      $(this).removeClass("is-invalid");
      // Clear the error message if it exists
      if (errorPhone.length) {
        errorPhone.remove();
      }

      $(this).addClass("is-invalid");
      // Insert an error message in the HTML
      $(this)
        .closest(".form-group")
        .append(
          "<span class='text-danger'>El campo 'Teléfono' debe contener mínimo 8 dígitos numéricos.</span>"
        );
    } else {
      $(this).removeClass("is-invalid");
      // Clear the error message if it exists
      if (errorPhone.length) {
        errorPhone.remove();
      }
    }
  });

  // Validate the state field
  $("#state").on("change", function () {
    let state = $(this).val();
    if (!state) {
      $(this).addClass("is-invalid");
      // Insert an error message in the HTML
      $(this)
        .closest(".form-group")
        .append(
          "<span class='text-danger'>El campo 'Estado' es obligatorio.</span>"
        );
    } else {
      $(this).removeClass("is-invalid");
    }
  });

  // Submit the form only if all fields are valid
  $("#btn-add-guest").on("click", function () {
    let isValid = true;

    // Check if all required fields are filled in
    $(".form-control").each(function () {
      if ($(this).hasClass("is-invalid")) {
        isValid = false;
      }
    });

    if (isValid) {
      // Submit the form
      $(this).closest("form").submit();
    }
  });
});
