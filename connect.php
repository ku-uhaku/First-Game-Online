<?php
$host = 'localhost'; // replace with your host
$dbname = 'firstonlinegame'; // replace with your database name
$username = 'root'; // replace with your username
$password = ''; // replace with your password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
