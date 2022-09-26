<?php
    ob_start(); // Enable output buffering
    session_start(); // Starts new session

    date_default_timezone_set("America/New_York");

    try {
        $conn = new PDO("mysql:dbname=dunbarflix;host=localhost", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch(PDOException $e) {
        exit("Connection failed: " . $e->getMessage());
    }
?>