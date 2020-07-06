<?php
require_once('../model/inscription_model.php');
require_once('bdd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Synedriáseis</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/hide.js"></script>
    <script src="../js/inscription.js"></script>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<div class="formulaire">
    <form id="inscription">
        <label for="nom">Nom</label> <input type="text" id="nom" class="champ"/>
        <br><br>
        <label for="prenom">Prénom</label> <input type="text" id="prenom" class="champ"/>
        <br><br>
        <label for="date_naissance">Date de naissance</label> <input type="date" id="date_naissance" class="champ"/>
        <br><br>
        <label for="genre">Genre</label>
        <select id="genre">
            <option value="null">Choisissez une option</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="Autre">Autre</option>
        </select>
        <br><br>
        <label for="ville">Ville</label> <input type="text" id="ville" class="champ"/>
        <br><br>
        <label for="email">E-mail</label> <input type="text" id="email" class="champ"/>
        <br><br>
        <label for="password">Mot de passe</label> <input type="password" id="password" value="" class="champ"/>
        <br><br>
        <label for="loisir">Loisir</label> <input type="text" id="loisir" class="champ"/>
        <br><br>
        <label for="submit" name="inscription"></label>
        <button type="submit" id="envoyer_inscription">Inscription</button>
        <br><br>
    </form>
</div>
<div class="button_inscription">
    <button onclick="location.href = 'index.php';">Retour à l'accueil</button>
</div>

</body>
</html>
