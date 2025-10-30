<?php
$servername = "mysql"; // name of MySQL service from docker-compose
$username = "root";
$password = "root";
$database = "project_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
