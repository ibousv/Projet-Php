<?php

if ($_SERVER["REQUEST_METHOD"] == "post") {
    $destinataire = $_POST[$destinataire];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];

    //configuration pour l'envoi de mail

    $headers = "Form : webmaster@example.com"; // remplacement par votre adressa e-mail
    $headers .= "\r\nContent-version:1.0";
    $headers .= "\r\nContent-type:text/html ; charchet = utf-8";

    // traitement du fichier joint

    $fichier_joint = $_FILES["fichier"]["tmp_name"];
    $nom_fichier = $_FILES["fichier"]["name"];

    // vérification si un fichier est joint

    if (!empty($fichier_joint)) {
        $fichier_joint = chunk_split(base64_encode(file_get_contents($fichier_joint)));
        $headers .= "\r\nContent-type : application/octet-stream; name = \"";
        $headers = "\r\nContent-Disposition : attachement; filename =\"" . $nom_fichier . "\"\r\n\r\n";

    }

    // Envoi du mail
    if (mail($destinataire, $sujet, $message, $$headers)) {
        echo "Mail envoyé avec succès.";

    } else {
        echo "erreur lors de l'envoi du mail .";

    }
} else {
    echo "Accès non autorisé";

}
