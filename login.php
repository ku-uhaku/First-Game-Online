<?php
session_start(); // start session to store user data

require_once 'model.php'; // include database connection and query function

// check if form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = getUserByUsername($username); // get user data from database by username

    // check if username exists and password matches
    if ($user && $password == $user['password']) {
        $_SESSION['username'] = $user['username']; // store username in session
        header('Location: index.php'); // redirect to home page
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>User Login</h2>
    <?php if (isset($error)) : ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>