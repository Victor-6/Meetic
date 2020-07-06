<?php
require_once('../model/connexion_model.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class connexion_controller
{
    public $email;
    public $password;
    public $login;

    public function connection()
    {
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->login = new connexion_model($this->email, $this->password);
        $this->login->loginMember();
    }
}

session_start();
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'connexion') {
        $loginMember = new connexion_controller();
        $loginMember->connection();
    }
    if ($_GET['action'] == 'display') {
        if (!isset($_SESSION['email'])) {
            echo "Erreur de connection";
        } else {
            connexion_model::getInfo($_SESSION['email']);
        }
    }
}