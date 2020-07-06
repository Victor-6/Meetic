<?php
require_once('../view/bdd.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class connexion_model
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = hash_hmac('ripemd160', $password,
            'Inscription réussie');
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function loginMember()
    {
        $pdo = bdd::connexion();
        if (!empty($this->email) && !empty($this->password)) {
            $query = "SELECT * FROM USER WHERE email=:email and password=:password";
            $statement = $pdo->prepare($query);
            $statement->bindParam(':email', $this->email);
            $statement->bindParam(':password', $this->password);
            $statement->execute();

            if ($statement->rowCount() == 1) {
                $_SESSION['email'] = $this->email;
            } else {
                echo "Connection échouée<br>"; ?>
                <a class="button button-primary" href="../view/index.php">
                    Retourner à la page de connexion
                </a>
                <?php
            }
        }
    }

    public static function getInfo($email)
    {
        $pdo = bdd::connexion();
        $query = "SELECT * FROM USER WHERE email = :email";
        $sql = $pdo->prepare($query);
        $sql->bindParam(":email", $email);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        print (json_encode($result));
    }
}



