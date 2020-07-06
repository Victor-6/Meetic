$(document).ready(function () {
    $('#connexion').submit(function (e) {
        e.preventDefault();

        let email, password;
        email = $('#email').val();
        password = $('#password').val();
        let flag = true;
        let arr = ['#email', '#password'];

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
                url: "../controller/connexion_controller.php?action=connexion",
                data: {
                    email: email,
                    password: password,
                },
                success: function (data) {
                    console.log(data);
                    alert("Vous êtes connecté");
                    document.location.href = "../view/account.php";
                }
            })
        }
    })
});
