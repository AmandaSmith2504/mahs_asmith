<?php

$servername = "localhost:3306";
$dBUsername = "root";
$dBPassword = "";
$dBName = "mahs_asmith";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}