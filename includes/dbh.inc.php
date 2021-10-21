<?php

$servername = "localhost:3306";
$dBUsername = "mahs_asmith";
$dBPassword = "mustangs";
$dBName = "mahs_asmith";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}