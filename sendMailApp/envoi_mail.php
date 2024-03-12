<?php

if (isset($_POST["envoyer"])) {
    ini_set("SMTP", "localhost");
    ini_set("smtp_port", "25");
    $destinataire = $_POST[$destinataire];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];
    $my_email = "testmailapp.php@gmail.com";
    $mail_header = "Name :" . $my_email . "\r\n Message :" . $message;

    if (mail($destinataire, $sujet, $message, $mail_header)) {
        echo "Mail envoyé avec succès.";

    } else {
        echo "erreur lors de l'envoi du mail .";

    }
} else {
    echo "Accès non autorisé";

}
