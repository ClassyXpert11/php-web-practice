<?php

    // first three are always the same by default
    // last one is what you called it in the phpmyadmin place. In this instance we called it login_register

    $hostName = "localhost";
    $dbuser = "root";
    $dbPassword = "";
    $dbName = "web_practice_db";

    $conn = mysqli_connect($hostName, $dbuser, $dbPassword, $dbName);

    if (!$conn) {
        die("Connection failed!!!");
    }

?>