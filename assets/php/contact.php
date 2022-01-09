<?php

$email;
$message;
checkValidation();
$messageSend =
    "Email de contacto: " . $email . "
    Mensaje: " . $message;
if (mail('jordi@jordimora.es', 'Contacta conmigo', $messageSend)) {
    echo "true";
} else {
    echo "false";
}


function checkValidation()
{
    global $email, $message;
    $email = filter_var($_REQUEST["inputEmail"], FILTER_VALIDATE_EMAIL);
    $message = filter_var($_REQUEST["inputMessage"], FILTER_SANITIZE_STRING);
}
