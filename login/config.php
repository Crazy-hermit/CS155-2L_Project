<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "bananalogin_db";

    $conn = mysqli_connect($server, $user, $pass, $database);

    if (!$conn) {
        echo "Connection failed.";
    }
?>