<?php // functions.php

function notificar($correo, $nombre, $body)
{
    # Imports
    require './vendor/PHPMailer/src/PHPMailer.php';
    require './vendor/PHPMailer/src/SMTP.php';

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
    $mail->Username = 'correoElectronico';
    $mail->Password = 'contrasenna';
    $mail->SetFrom('correoElectronico', 'NombreEnCorreo');
    $mail->Subject = 'Asunto del Correo';
    $mail->MsgHTML($body);

    $mail->AddAddress($correo, $nombre);

    # Conditional: 
    if (!$mail->send()) {

        echo 'Message could not be sent.';

        echo 'Mailer Error: ' . $mail->ErrorInfo;

    } else {

        echo 'Message has been sent';

    }

}
?>