$(document).ready(function () {
  // Get the old password input field
  let oldPasswordInput = $("#new-password");

  // Get the new password input field
  let newPasswordInput = $("#confirmed-password");

  // When the new password input field is changed, check if it is the same as the old password
  newPasswordInput.on("change", function () {
    // Get the value of the new password input field
    let newPassword = newPasswordInput.val();

    // Check if the new password is the same as the old password
    if (newPassword === oldPasswordInput.val()) {
      // Display an error message
      $("#new_password_error").text(
        "The new password cannot be the same as the old password."
      );

      // Disable the submit button
      $("#submit_button").prop("disabled", true);
    } else {
      // Hide the error message
      $("#new_password_error").text("");

      // Enable the submit button
      $("#submit_button").prop("disabled", false);
    }
  });
});
