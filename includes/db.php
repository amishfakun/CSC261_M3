<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "R00TUSER20";
$dbName = "testDB";

//connection
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else print "<br>Connection OK!";

// add values to the table



?>