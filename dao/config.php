<?php
$servername = "localhost";
$username = "root";
$password = "@UCccs2026";

try {
    $db = new PDO("mysql:host=$servername;dbname=oop_crud", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>