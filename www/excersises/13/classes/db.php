<?php

class DB {
    private $host = 'localhost';
    private $db   = 'classicmodels';
    protected $user = 'root';
    private $pass = 'root';
    private $charset = 'utf8mb4';
    public $pdo;

    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}