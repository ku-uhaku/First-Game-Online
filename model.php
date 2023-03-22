<?php
require_once 'connect.php'; // include database connection

function insertUser($username, $email, $password)
{
    global $pdo; // access global PDO connection variable

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $stmt->execute(['username' => $username, 'email' => $email, 'password' => $password]);
}

function getUserByUsername($username)
{
    global $pdo; // access global PDO connection variable

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC); // fetch user data as associative array

    return $user ? $user : false; // return user data or false if username not found
}
$index = $_POST['index'];

function storePexel($index)
{
}
