<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "ethan.lorant@sts-sio-caen.info"; // Remplacez ceci par votre adresse email

    $subject = "Nouveau message de $name";
    $body = "Nom: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
