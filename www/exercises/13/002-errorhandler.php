<pre>
<?php
// error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
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

