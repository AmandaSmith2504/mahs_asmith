<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
<?php
    session_start();
?>

<?php
$_SESSION['username'] = "AmandaSmith2504";
echo $_SESSION['username'];

if(isset($_SESSION['usermane'])){
    echo " You are not logged in!";
} else {
    echo " You are logged in!";
}

?>

<header>
    <nav>
        <ul>
            <li><a href="index.php">Index</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="calculator.php">Calculator</a></li>
            <li><a href="calendar.php">Calendar</a></li>
        </ul>
    </nav>
</header>

</body>
</html>