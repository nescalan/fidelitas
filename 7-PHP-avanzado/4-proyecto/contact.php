<?php // contact.php

# Database Connections file
require_once './app/model/db_connection/Connection.model.php';
# Configuration file
require_once './app/admin/config.php';
# Functions file
require_once './app/funcs/functions.php';
# Contact file
require_once './app/views/contact.view.php';

# Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # Instance a new contact

    # Collect and set data from the form
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    # Store data into the 'contact' object
    $contact->setName($name);
    $contact->setEmail($email);
    $contact->setSubject($subject);
    $contact->setMessage($message);
}

if (empty($contact->getName()) || empty($contact->getEmail()) || empty($contact->getSubject()) || empty($contact->getMessage())) {
    # set error message
    $errorMessage .= '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
} else {
    # Import dB file and open dB connection
    require_once './app/model/Connection.model.php';
    require_once './app/functions/notifyMail.php';

    # Connection instance
    $connection = new Connection();
    $sqlConnection = $connection->openConnection();

    # Insert into dB
    $queryContactForm =
        "INSERT INTO `PHPMailer`.`contacts` (`name`, `mail`, `subject`, `message`) VALUES 
        ('" . $contact->getName() . "', '" . $contact->getEmail() . "', '" . $contact->getSubject() . "', '" . $contact->getMessage() . "');";

    # Send query
    $resultContactForm = mysqli_query($sqlConnection, $queryContactForm);

    # PHPMailer notification
    ob_start();
    include('./app/views/message2.view.php');
    $htmlContent = ob_get_clean();
    $body = $htmlContent;
    notifyMail($contact->getEmail(), $contact->getName(), $body);

    # Clean form variables
    $contact->setName('');
    $contact->setEmail('');
    $contact->setSubject('');
    $contact->setMessage('');
    $errorMessage = '';

    # set success message
    $successMessage .= '<div class="alert alert-success" role="alert">Mensaje enviado.</div>';
}

require_once 'app/views/contact.view.php';

?>