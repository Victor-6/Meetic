<?php
require_once('../model/connexion_model.php');
require_once('bdd.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Synedriáseis/Connexion/Account</title>
    <link rel="shortcut icon" href="">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/account.js"></script>
    <h1 class="accueil">Bienvenue sur mon compte !</h1>
</head>
<body>
<form id="formulaire">
    <table class="form">
        <caption>Informations utilisateur</caption>
        <tr id="menu">
        <tr id="10"></tr>
        <th id="1">Nom</th>
        <th id="2">Prénom</th>
        <th id="3">date_naissance</th>
        <th id="4">Genre</th>
        <th id="5">Ville</th>
        <th id="6">Email</th>
        <th id="7">Password</th>
        <th id="8">Loisir</th>
        </tr>
        <tr id="information"></tr>
    </table>
</form>
<div class="boutton_bas">
    <div id="button">
        <button id="button_inscription" onclick="location.href = 'index.php';">Retour à l'accueil</button>
        <button id="modification" onclick="location.href = 'modification_profil.php';">Modification</button>
        <button id="deconnexion" onclick="location.href = 'deconnexion.php';">Déconnexion</button>
    </div>
</div>
</body>
</html>
