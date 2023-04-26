<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION[$_GET['key']])) {
    echo $_SESSION[$_GET['key']];
} else {
    header('HTTP/1.1 500 Internal Server Booboo');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
}
?>