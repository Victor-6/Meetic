<?php
require_once('../model/modification_model.php');
require_once('bdd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Synedriáseis</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/modification_get.js"></script>
    <script src="../js/modification_update.js"></script>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <h1 class="accueil">Vous pouvez modifiez votre compte !</h1>
</head>
<body>
<form id="modifier_form">
    <label for="nom">Nom</label>
    <br><br>
    <input type="text" placeholder="Votre Nom" id="nom" name="nom">
    <label for="prenom">Prénom</label>
    <br><br>
    <input type="text" placeholder="Votre Prénom" id="prenom" name="prenom">
    <label for="date_naissance">Date de naissance</label>
    <br><br>
    <input type="date" placeholder="Date de naissance" id="date_naissance" name="date_naissance">
    <label for="genre">Genre</label>
    <br><br>
    <input type="text" placeholder="Votre genre" id="genre" name="genre">
    <label for="ville">Ville</label>
    <br><br>
    <input type="text" placeholder="Votre ville" id="ville" name="ville">
    <label for="password">Password</label>
    <br><br>
    <input type="password" placeholder="Votre mot de passe" id="password" name="password">
    <label for="loisir">Loisir</label>
    <br><br>
    <input type="text" placeholder="Votre loisir" id="loisir" name="loisir">
    <input type="submit" id="envoyer_modif" name="modification" value="Modifier" </input>
</form>
<form id="affichage">
</form>
<div class="input_bas">
    <div id="input">
        <button id="modif_deco" onclick="location.href = 'deconnexion.php';">Déconnexion</button>
    </div>
</div>
</body>
</html>