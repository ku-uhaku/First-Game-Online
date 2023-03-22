<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Game</title>
  <link rel="stylesheet" href="style.css" />
  <script src="app.js" defer></script>
</head>

<body>
  <?php if (isset($_SESSION['username'])) : ?>
    <div class="welcome">

      <h1>Welcome <?php echo $_SESSION['username']; ?></h1>

      <div class="timer">You can start it</div>

      <a href="logout.php">Logout</a>
    </div>
  <?php else : ?>
    <div class="welcome">
      <h1>Welcome Guest</h1>
      <a href="login.php">Login</a>
    </div>
  <?php endif; ?>
  <div class="container">
    <div class="board"></div>
    <div class="colors">
      <div class="color" data-color="red"></div>
      <div class="color" data-color="green"></div>
      <div class="color" data-color="purple"></div>
      <div class="color" data-color="black"></div>
      <div class="color" data-color="white"></div>
      <div class="color" data-color="yellow"></div>
    </div>
  </div>


</body>

</html>