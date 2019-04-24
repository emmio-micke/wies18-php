<?php

class User {
    private $db;
    public $is_logged_in = false;

    public function __construct() {
        $obj = new DB();
        $this->db = $obj->pdo;
    }

    public function login($user, $pass) {
        $stmt = $this->db->prepare("SELECT password FROM users WHERE username = :user");
        $stmt->execute([':user' => $user]);
        $hash = $stmt->fetchColumn();

        $this->is_logged_in = password_verify($pass, $hash);

        if ($this->is_logged_in) {
            $_SESSION['logged_in'] = true;
            $_SESSION['name'] = 'Mikael Olsson';
            $_SESSION['shoesize'] = 43;
        }

        return $this->is_logged_in;
    }

    public function register($user, $pass) {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->execute([':username' => $user, ':password' => $hash]);

        return true;
    }
}
