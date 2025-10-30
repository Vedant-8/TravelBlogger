<?php
echo "<h1>Docker PHP + MySQL Setup Working!</h1>";

$servername = "db";  // same as service name in docker-compose
$username = "root";
$password = "root";
$dbname = "project_db";

// Try to connect
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<p>Connected successfully to MySQL!</p>";

mysqli_close($conn);
?>
