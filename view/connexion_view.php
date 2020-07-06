<?php
require_once('../model/connexion_model.php');
require_once('bdd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Synedriáseis</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/connexion.js"></script>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="formulaire">
    <form id="connexion">
        <label for="email">Login</label> <input name="email" type="text" id="email" class="champ"/>
        <br><br>
        <label for="password">Password</label> <input name="password" type="password" id="password" class="champ">
        <br><br>
        <input type="submit" id="envoyer" name="envoyer" value="Connexion"/>
        <br><br>
    </form>
</div>
<div class="button_inscription">
    <button onclick="location.href = 'index.php';">Retour à l'accueil</button>
</div>
</body>
</html>
