<?php

$host = "localhost:3307";
$login = "root";
$password = "";
$database = "retroGame";


$conn = @new mysqli($host, $login, $password, $database);

if ($conn->connect_errno) {
    $error = $conn->connect_error;
    header("Location: error.php?m=$error");
    //die();
}
