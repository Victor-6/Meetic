$(document).ready(function () {
    $('#modifier_form').submit(function (e) {
        e.preventDefault();

        let nom, prenom, date_naissance, genre, ville, email, password, loisir;
        nom = $('#nom').val();
        prenom = $('#prenom').val();
        date_naissance = $('#date_naissance').val();
        genre = $('#genre').val();
        ville = $('#ville').val();
        email = $('#email').val();
        password = $('#password').val();
        loisir = $('#loisir').val();

        let flag = true;
        let arr = ['#nom', '#prenom', '#email', '#date_naissance', '#genre', '#ville', '#email', '#password', '#loisir'];
        $.each(arr, function (index, value) {
            if ($(arr[index]).val() == "") {
                flag = false;
                $(arr[index]).css("border-color", "red");
            }
        });
        if (flag == false) {
            alert("Vérifier votre/vos champs !");
        } else {

            $.ajax({
                type: "POST",
                url: "../controller/modification_controller.php?action=update",
                data: {
                    nom: nom,
                    prenom: prenom,
                    date_naissance: date_naissance,
                    genre: genre,
                    ville: ville,
                    email: email,
                    password: password,
                    loisir: loisir,
                },
                success: function (data) {
                    alert ('Modification réussie !')
                }
            })
            return false;
        }
    })
})
