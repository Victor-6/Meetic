$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "../controller/modification_controller.php?action=affichage",
        data: {
            nom: 'nom',
            prenom: 'prenom',
            date_naissance: 'date_naissance',
            genre: 'genre',
            ville: 'ville',
            email: 'email',
            password: 'password',
            loisir: 'loisir',
        },
        dataType: 'JSON',
        success: function (data) {
            $('#affichage').append("<th id='_nom'>" + data['nom'] + "</th>");
            $('#affichage').append("<th id='_prenom'>" + data['prenom'] + "</th>");
            $('#affichage').append("<th id='_data'>" + data['date_naissance'] + "</th>");
            $('#affichage').append("<th id='_genre'>" + data['genre'] + "</th>");
            $('#affichage').append("<th id='_ville'>" + data['ville'] + "</th>");
            $('#affichage').append("<th id='_mail'>" + data['email'] + "</th>");
            $('#affichage').append("<th id='_pswd'>" + data['password'] + "</th>");
            $('#affichage').append("<th id='_loisir'>" + data['loisir'] + "</th>");
        }
    })

})