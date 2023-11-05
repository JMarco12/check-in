<?php
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $dbname = "aereolinea";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }


?>
