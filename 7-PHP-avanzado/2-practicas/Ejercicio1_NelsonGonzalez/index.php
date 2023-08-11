<?php

require_once './app/classes/Contact.class.php';

# Variables, constants and arrays
$errorMessage = $successMessage = '';

# Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # Instance a new contact
    $contact = new Contact();

    # Collect and set data from the form
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    # Store data into the 'contact' object
    $contact->setName($name);
    $contact->setEmail($email);
    $contact->setSubject($subject);
    $contact->setMessage($message);
}

if






require_once './app/views/index.view.php';

?>