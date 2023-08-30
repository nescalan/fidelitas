<?php // notifyMail.php

function notifyMail($email, $name)
{
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

}
?>