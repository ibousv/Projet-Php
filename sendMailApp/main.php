<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendMAilApp</title>
</head>

<body>
    <div>
        <form action="envoi_mail.php" method="post">
            <label for="destinataire">Email du destinataire </label><br>
            <input type="email" name="destinataire" placeholder="saisissez mail" required /><br>
            <label for="sujet">Objet du mail</label><br>
            <input type="text" name="sujet" placeholder="saisissez l'objet" required /><br>
            <label for="message">Meessage</label><br>
            <textarea name="message" placeholder="Entrez le message" cols="50" rows="10"></textarea><br>
            <label for="fichier">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Joindre un fichier : </label>
            <input type="file" name="fichier" value="sélectionner"/><br><br>
            <input type="submit" name="envoyer" value="Envoyer">
        </form>
    </div>
</body>

</html>