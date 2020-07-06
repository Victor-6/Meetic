<?php
require_once('../view/bdd.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class inscription_model
{
    public $nom;
    public $prenom;
    public $date_naissance;
    public $genre;
    public $ville;
    public $email;
    public $password;
    public $loisir;

    public function __construct($nom, $prenom, $date_naissance, $genre, $ville, $email, $password, $loisir)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->genre = $genre;
        $this->ville = $ville;
        $this->email = $email;
        $this->password = hash_hmac('ripemd160', $password,
            'Inscription réussie');
        $this->loisir = $loisir;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setLoisir($loisir)
    {
        $this->loisir = $loisir;
    }

    public function saveMember()
    {
        $pdo = bdd::connexion();
        if (!empty($this->nom) && !empty($this->prenom) && !empty($this->date_naissance)
            && !empty($this->genre) && !empty($this->ville) && !empty($this->email) && !empty($this->password)
            && !empty($this->loisir)) ;
        $birth = date($this->date_naissance);
        $query = "INSERT INTO USER (nom, prenom, date_naissance, genre, ville, email, password, loisir) 
        VALUES (?,?,?,?,?,?,?,?)";
        $sql = $pdo->prepare($query);
        $sql->bindParam(1, $this->nom);
        $sql->bindParam(2, $this->prenom);
        $sql->bindParam(3, $birth);
        $sql->bindParam(4, $this->genre);
        $sql->bindParam(5, $this->ville);
        $sql->bindParam(6, $this->email);
        $sql->bindParam(7, $this->password);
        $sql->bindParam(8, $this->loisir);
        $sql->execute();
        if ($sql->rowCount() == 1) {
            $_SESSION['email'] = $this->email;

        } else {
            echo "Connection échouée<br>"; ?>
            <a class="button button-primary" href="../view/index.php">
                Retourner à la page d'inscription
            </a>
            <?php
        }
    }

    public static function setInfo($email)
    {
        $pdo = bdd::connexion();
        $query = "SELECT * FROM USER WHERE email = :email";
        $sql = $pdo->prepare($query);
        $sql->bindParam(":email", $email);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        print_r(json_encode($result));
    }
}