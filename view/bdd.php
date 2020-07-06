<?php

class bdd
{
    public static function connexion()
    {
        $charset = "utf8";
        $server = "127.0.0.1";
        $username = "root";
        $password = "Victor@Epitech1";
        $dbname = "meetic";
        try {
            $bdd = "mysql:host=" . $server . ";dbname=" . $dbname . ";charset=" . $charset;
            $pdo = new PDO($bdd, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connexion échouée" . $e->getMessage();
        }
    }
}