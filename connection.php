<?php
$host = "localhost";
$dbname = "dolphin_crm";
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$username ="root";
$password = "";

try {
    //code...
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connetion failed: " .$e->getMessage();
}