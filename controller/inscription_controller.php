<?php
require_once('../model/inscription_model.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class inscription_controller
{
    public $nom;
    public $prenom;
    public $date_naissance;
    public $genre;
    public $ville;
    public $email;
    public $password;
    public $loisir;

    public function inscription()
    {
        $this->nom = $_POST['nom'];
        $this->prenom = $_POST['prenom'];
        $this->date_naissance = $_POST['date_naissance'];
        $this->genre = $_POST['genre'];
        $this->ville = $_POST['ville'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->loisir = $_POST['loisir'];
        $newMember = new inscription_model($this->nom, $this->prenom, $this->date_naissance, $this->genre, $this->ville,
            $this->email, $this->password, $this->loisir);
        $newMember->saveMember();
    }
}
session_start();
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'registration') {
        $register = new inscription_controller();
        $register->inscription();
    }
    if ($_GET['action'] == 'display_2') {
        if (!isset($_SESSION['email'])) {
            echo "Erreur de connection";
        } else {
            connexion_model::setInfo($_SESSION['email']);
        }
    }

}