<?php

require_once './app/classes/Contact.class.php';

# Form information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # Instance a new contact
    $contact = new Contact();

    # Collect data
    $contact->setName($_POST['name']);
    $contact->setEmail(($_POST['email']));
    $contact->setSubject($_POST['subject']);
    $contact->setMessage(($_POST['message']));
}

echo "Nombre: {$contact->getName()} <br/> ";
echo "Correo: {$contact->getEmail()} <br/> ";
echo "Tema: {$contact->getSubject()} <br/> ";
echo "Mensaje: {$contact->getMessage()} <br/> ";

require_once './app/views/index.view.php';

?>