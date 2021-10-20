<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" contact="This is an example of meta descripion. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
  </head>
<body>
<header>
    <nav>
        <a href="indes.php">
            <img src="img/logo.png" alt=logo>
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="calculator.php">Calculator</a></li>
            <li><a href="calendar.php">Calendar</a></li>
        </ul>
    </nav>
        <div>
            <?php
                if(isset($_SESSION['userId'])){
                    echo '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                }
                else{
                    echo '<form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="login-submit">Login</button>
                        </form>
                        <a href="signup.php">Signup</a>';
                }
            ?>
        </div>
</header>

</body>
</html>