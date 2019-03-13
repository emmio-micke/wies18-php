<pre>
<?php
// error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    $host = 'localhost';
    $db   = 'classicmodels';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8mb4';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
    try {
         $pdo = new PDO($dsn, $user, $pass);
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting, so let it fall
        // through to the standard PHP error handler
        return false;
    }

    switch ($errno) {
        case E_USER_WARNING:
            echo "<b>My WARNING</b> [$errno] $errstr" . PHP_EOL;
            break;

        case E_USER_NOTICE:
            echo "<b>My NOTICE</b> [$errno] $errstr" . PHP_EOL;
            break;

        default:
            echo "Unknown error type: [$errno] $errstr" . PHP_EOL;
            break;
    }

    $query = "INSERT INTO errorlog (error_code, error_msg) VALUES ( :errorcode , :errormsg)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':errorcode' => $errno, ':errormsg' => $errstr]);

    /* Don't execute PHP internal error handler */
    return true;
}

set_error_handler("myErrorHandler");

$value = "hello";
if (!is_numeric($value)) {
    trigger_error("Value is not a number, using 0 (zero)", E_USER_NOTICE);
    $value = 0;
}

$vect = "hello";
if (!is_array($vect)) {
    trigger_error("Incorrect input vector, array of values expected", E_USER_WARNING);
    return null;
}

