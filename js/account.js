$(document).ready(function () {

    $.ajax({
        type: "GET",
        url: "../controller/connexion_controller.php?action=display",
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
            $('#information').append("<th>" + data['nom'] + "</th>");
            $('#information').append("<th>" + data['prenom'] + "</th>");
            $('#information').append("<th>" + data['date_naissance'] + "</th>");
            $('#information').append("<th>" + data['genre'] + "</th>");
            $('#information').append("<th>" + data['ville'] + "</th>");
            $('#information').append("<th>" + data['email'] + "</th>");
            $('#information').append("<th>" + data['password'] + "</th>");
            $('#information').append("<th>" + data['loisir'] + "</th>");
        }
    })
})