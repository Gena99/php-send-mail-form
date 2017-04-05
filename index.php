<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'envoi de mails</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>
    <form action="envoyer.php" method="POST">
        Nom, Prénom :
        <br /><input type="text" name="pseudo">
        <br />
        Adresse mail :
        <br /><input type="text" style= "width: 200px; height: 25px;" name="mail">
        <br />
        Message :
        <br /><textarea cols = "50" rows = "10" name ="message"></textarea>
        <br />
        <br />
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            envoyer
        </button>  



    </form>

</body>

</html>