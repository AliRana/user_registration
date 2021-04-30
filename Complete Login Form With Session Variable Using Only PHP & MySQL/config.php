<?php

$serverName = "localhost";
$dbUser = "u-190080831";
$dbPass = "zPJYAHd7Cux90K0U";
$dbName = "user_registration";

$conn = mysqli_connect($serverName, $dbUser, $dbPass, $dbName);

if (!$conn) {
    echo("Connection has failed: " . mysqli_connect_error());
}

?>