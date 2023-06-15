$(document).ready(function () {
  // Identify the div and button elements
  let $secDisplayInquilinos = $("#sec-display-guests");
  let $secAddInquilinos = $("#sec-add-guests");
  let $btnGuests = $("#btn-guests");
  let $btnBack = $("#btn-back");
  let $btnAddGuest = $("btn-add-guest");
  // let $btnCancelAddGuest = $("#btn-cancel-guest");

  // Hide secion "add-inquilinos"
  $($secAddInquilinos).css("display", "none");

  // Attach an event handler to the $btnGuests element
  $btnGuests.on("click", function () {
    // Hide the div element
    $secDisplayInquilinos.hide();
    $secAddInquilinos.removeClass("d-none");
    $secAddInquilinos.show();
  });

  // Attach an event handler to the $btnGuests element
  $btnBack.on("click", function () {
    // Hide the div element
    $secAddInquilinos.hide();
    $secDisplayInquilinos.show();
  });

  // ***********
  // Validate the ID number field
  $("#id-number").on("blur", function () {
    let idNumber = $(this).val();
    let errorIdNumber = $(this).closest(".form-group").find(".text-danger");

    if (!idNumber) {
      // Insert an error message in the HTML if it doesn't already exist
      if (!errorIdNumber.length) {
        $(this).addClass("is-invalid");
        // Insert an error message in the HTML
        $(this)
          .closest(".form-group")
          .append(
            "<span class='text-danger'>El campo 'Número de Cédula' es obligatorio.</span>"
          );
      }
    } else if (!/^[0-9]{9}$/.test(idNumber)) {
      $(this).addClass("is-invalid");
      // Insert an error message in the HTML
      $(this)
        .closest(".form-group")
        .append(
          "<span class='text-danger'>El campo 'Número de Cédula' debe contener mínimo 9 dígitos numéricos.</span>"
        );
    } else {
      $(this).removeClass("is-invalid");
      // Clear the error message if it exists
      if (errorIdNumber.length) {
        errorIdNumber.remove();
      }
    }
  });

  // Validate the full name field
  $("#fullname").on("blur", function () {
    let fullname = $(this).val();
    let errorFullname = $(this).closest(".form-group").find(".text-danger");

    if (!fullname) {
      // Insert an error message in the HTML if it doesn't already exist
      if (!errorFullname.length) {
        $(this).addClass("is-invalid");
        // Insert an error message in the HTML
        $(this)
          .closest(".form-group")
          .append(
            "<span class='text-danger'>El campo 'Nombre Completo' es obligatorio.</span>"
          );
      }
    } else {
      $(this).removeClass("is-invalid");
      // Clear the error message if it exsists
      if (errorFullname.length) {
        errorFullname.remove();
      }
    }
  });

  // Validate the phone number field
  $("#phone").on("blur", function () {
    let phone = $(this).val();
    let errorPhone = $(this).closest(".form-group").find(".text-danger");

    if (!phone) {
      // Insert an error message in the HTML if it doesn't already exist
      if (!errorPhone.length) {
        $(this).addClass("is-invalid");
        // Insert an error message in the HTML
        $(this)
          .closest(".form-group")
          .append(
            "<span class='text-danger'>El campo 'Teléfono' es obligatorio.</span>"
          );
      }
    } else if (!/^[0-9]{8}$/.test(phone)) {
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
