<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $name = 'Coding is fun';

    $name = 20;

    $name = 20.5784;

    $names = array("Mark","Amy","Clayton","Daniel","Amanda");
    echo $names ['4']
?>


<?php
    $x = 1;

    if($x == 1){
        echo "Yo";
    }
    elseif($x == 2){
        echo "Jo";
    }
    else{
        echo "No";
    }
?>

<br>

<form>
    ~Do you think you're a 'cool' person? - <b>Please select your answer --></b>
    <select name="answer">
        <option>None</option>
        <option>I don't want to say</option>
        <option>Yes</option>
        <option>No</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Submit</button>
</form>

<?php
    if (isset($_GET['submit'])){
        $answer = $_GET['answer'];
        switch ($answer){
            case "None":
                echo "Please select an answer.";
            break;
            case "I don't want to say":
                echo "Answer the qusetion you fool.";
            break;
            case "Yes":
                echo "Wrong, I'M the ONLY cool one...";
            break;
            case "No":
                echo "You got that right.";
            break;
            default:
                echo "What did you do to get this answer?";
        }
    }
?>


<?php
echo "<br>";
echo "<br>While Loop:";

    $x = 1;
    while ($x <= 5) {
        echo "<br>- hi there";
        $x++;
    }

    echo "<br>";
?>

--------------------------------

<?php
echo "<br>Do While Loop:";
    $x = 1;
    do {
        echo "<br>- hi there";
        $x++;
    }
    while ($x <= 5);

    echo "<br>";
?>

--------------------------------

<?php
echo "<br>For Loop:";
    for ($x = 1; $x <= 10; $x++) {
        echo "<br>- hi";
    }

    echo "<br>";
?>

--------------------------------

<?php
echo "<br>Foreach Loop:";
    $array = array("Daniel", "Jane", "Jacob", "John", "Mariane");

    foreach ($array as $loopdata) {
        echo "<br>- My name is ".$loopdata;
    }
?>

<section>
    <div class="someMainContect">
        <h1>Hi there!</h1>
    </div>
</section>



<?php
//Local and Global Scope AND Superglobals
$z = 5;

function something() {
    $y = 10;
    echo $GLOBALS['z'];
}
something();
echo "<br>";
?>
--------------------------------

<?php
//POST and GET
    echo "<br>";
    echo $_POST["name"];
?>

<form method="POST">
    <input type="hidden" name="name" value="Amanda">
    <button type="submit">PRESS ME!</button>
</form>


<?php
//COOKIE and SESSION
setcookie("name", "Amanda", time() + 172800);

$_SESSION['name'] = "12";

?>

</body>
</html>