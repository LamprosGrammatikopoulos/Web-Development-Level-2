<?php
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "webpage_db";

    if (!$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname)) {
        die("Failed to connect.");
    }
?>