<?php

class DB {
    private $host = 'localhost';
    private $db   = 'classicmodels';
    private $user = 'root';
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

class User {
    private $db;

    public function __construct() {
        $obj = new DB();
        $this->db = $obj->pdo;
    }

    public function login($user, $pass) {
        $stmt = $this->db->prepare("SELECT password FROM users WHERE username = :user");
        $stmt->execute([':user' => $user]);
        $hash = $stmt->fetchColumn();

        return password_verify($pass, $hash);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<h1>Hello world!</h1>
<pre>
<?php

// echo password_hash('hemligt', PASSWORD_DEFAULT);

$user = new User();

if ($user->login('micke', 'hemligt')) {
    echo "Logged in<br>";
} else {
    echo "Not logged in<br>";
}

?>
</pre>
</body>
</html>