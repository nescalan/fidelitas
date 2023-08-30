<?php // contact.php

# Database Connections file
include_once './app/model/db_connection/Connection.model.php';
# Configuration file
include_once './app/admin/config.php';
# Functions file
include_once './app/funcs/functions.php';

$successMessage = '';


# Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # Collect and set data from the form
    $name = sanitizeData($_POST['name']);
    $email = sanitizeData($_POST['email']);
    $subject = sanitizeData($_POST['subject']);
    $message = sanitizeData($_POST['message']);



    # New database connection, sets data from 'config' file
    $conn = new Connection(
        $bd_config['host'],
        $bd_config['user'],
        $bd_config['pwd'],
        $bd_config['database']
    );

    // Open the database connection
    $dbConnection = $conn->openConnection();

    // Check connection
    if ($dbConnection->connect_error) {
        die($dbConnection->connect_error);
    }

    # Insert into dB
    $queryContactForm =
        "INSERT INTO `blog`.`contacts` (`name`, `mail`, `subject`, `message`) VALUES 
        ('$name', '$email', '$subject', '$message');";

    # Send query
    $resultContactForm = mysqli_query($dbConnection, $queryContactForm);

    # Check Qyuery result
    if (!$resultContactForm) {
        header('Location:error.php');
    }


    # Imports
    require_once './vendor/PHPMailer/src/PHPMailer.php';
    require_once './vendor/PHPMailer/src/SMTP.php';

    $body = "<html>
                <body>
                    <h1>Mensaje Automático</h1>
                    <p>Hola, $name</p>
                    <p>Este es un mensaje automático enviado desde PHPMailer.</p>
                    <p>¡Gracias por usar nuestro servicio!</p>
                </body>
            </html>";

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->IsSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'nelson-php-dev@outlook.com';
    $mail->Password = 'nxbwcp7h';
    $mail->SetFrom('nelson-php-dev@outlook.com', 'Sistema PHP Avanzado');
    $mail->Subject = 'Registro en el Sistema';
    $mail->MsgHTML($body);

    # Mail Debug
    // $mail->SMTPDebug = SMTP::DEBUG_CONNECTION;

    $mail->AddAddress($email, $name);

    # Conditional: 
    if ($mail->send()) {
        echo 'El mensaje se ha enviado correctamente.';
    } else {
        echo 'Hubo un error al enviar el mensaje: ' . $mail->ErrorInfo;
    }

    # Clean form variables
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    $errorMessage = '';

    # set success message
    $successMessage .= '<div class="alert alert-success" role="alert">*** Mensaje enviado ***</div>';

}
require_once 'app/views/contact.view.php';


?>