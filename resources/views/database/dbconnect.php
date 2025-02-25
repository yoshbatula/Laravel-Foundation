<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "laravel_foundation";

    $conn = new mysqli($host, $user, $pass, $dbname);
        if ($conn->connect_error) {
            echo "Failed to connect" . $conn->connect_error;
        }
?>