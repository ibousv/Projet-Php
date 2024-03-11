
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendMAilApp</title>
</head>
<body>
    <form action="envoi_mail.php" method="post" enctype="multipart/form-data">
    <label for="destinataire">Destinataire : </label>
    <input type="email" name="destinataire" placeholder="saisissez mail" required /><br>
    <label for="sujet">Sujet :</label><br>
    <input type="text" name="sujet" placeholder="saisissez votre objet" required /><br>
    <label for="message">Meessage</label><br>
    <textarea name="message" placeholder="saisir message" id="" cols="" rows="4"></textarea><br>
    <label for="fichier">joindre un fichier : </label>
    <input type="file" name="fichier" required /><br>
    <input type="submit" value="Envoyer">

</form>
</body>
</html>