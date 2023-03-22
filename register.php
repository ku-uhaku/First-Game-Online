<?php
session_start(); // start session to store user data

require_once 'model.php'; // include database connection and query function

// check if form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    insertUser($username, $email, $password); // insert user data into database
    $_SESSION['username'] = $username; // store username in session
    header('Location: login.php'); // redirect to success page
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>User Registration</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>

</html>