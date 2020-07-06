<?php
require_once('../model/modification_model.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 class modification_controller
{
    public $nom;
    public $prenom;
    public $date_naissance;
    public $genre;
    public $ville;
    public $email;
    public $password;
    public $loisir;

    public function affichage()
    {
        $this->nom = $_POST['nom'];
        $this->prenom = $_POST['prenom'];
        $this->date_naissance = $_POST['date_naissance'];
        $this->genre = $_POST['genre'];
        $this->ville = $_POST['ville'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->loisir = $_POST['loisir'];
        $affichage = new modification_model($this->nom, $this->prenom, $this->date_naissance, $this->genre, $this->ville,
            $this->email, $this->password, $this->loisir);
        $affichage->update();
    }
}

session_start();
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'update') {
        $update = new modification_controller();
        $update->affichage();
    }
    if ($_GET['action'] == 'affichage') {
        if (!isset($_SESSION['email'])) {
            echo "Afichage échouée !";
        } else {
            modification_model::select($_SESSION['email']);
        }
    }
}

