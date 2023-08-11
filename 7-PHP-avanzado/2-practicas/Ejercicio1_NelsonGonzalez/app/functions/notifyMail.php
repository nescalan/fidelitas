<?php // notifyMail.php

function notifyMail($correo, $nombre, $body)
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
    $mail->Username = 'nelson-devops@outlook.com';
    $mail->Password = 'nxbwcp7h';
    $mail->SetFrom('nelson-devops@outlook.com', 'Sistema PHP Avanzado');
    $mail->Subject = 'Registro en el Sistema';
    $mail->MsgHTML($body);

    $mail->AddAddress($correo, $nombre);

    # Conditional: 
    if (!$mail->send()) {

        echo 'Message could not be sent.';

        echo 'Mailer Error: ' . $mail->ErrorInfo;

    } else {
        # Success message
        $successMessage .= '<div class="alert alert-success" role="alert">El correo se envió con éxito.</div>';
        echo 'Message has been sent';

    }

}
?>