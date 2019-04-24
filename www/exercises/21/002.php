<?php

namespace myTestNS;

class User
{
    public $pdo;

    public function __construct()
    {
        $host  = '127.0.0.1';
        $db    = 'classicmodels';
        $port  = '8889';
        $user  = 'root';
        $pass  = 'root';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            print_r($e);
            // throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function register($user, $pass)
    {
        // Create a user.
        $sql = 'INSERT INTO users (username, password) VALUES (:user, :pass);';
        $statement = $this->pdo->prepare($sql);
        $params = [
            'user' => $user,
            'pass' => password_hash($pass, PASSWORD_DEFAULT)
        ];
    }
}

$user = new User();
$user->register('olle', 'banan');

var_dump($user);
