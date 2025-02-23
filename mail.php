<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'robinsounier66@gmail.com';
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $subject = "Nouveau message de $name";

    $headers = "From: $name <$email>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Votre message a bien été envoyé';
    } else {
        echo "Votre message n'a pas pu être envoyé";
    }
}
?>