<?php // notifyMail.php

function notifyMail($correo, $nombre, $body)
{
    # Imports
    require_once './vendor/PHPMailer/src/PHPMailer.php';
    require_once './vendor/PHPMailer/src/SMTP.php';

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

    $mail->AddAddress($correo, $nombre);

    # Conditional: 
    if (!$mail->send()) {

        echo 'Message could not be sent.';

        echo 'Mailer Error: ' . $mail->ErrorInfo;

    } else {
        # Success message
        // echo 'Message has been sent';

    }

}
?>