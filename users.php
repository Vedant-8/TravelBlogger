<?php
include 'db_connect.php';

$result = mysqli_query($conn, "SELECT * FROM users");

echo "<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>User List</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body class='bg-light'>
<div class='container my-5'>
  <h2 class='mb-4'>Registered Users</h2>
  <div class='card p-3'>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<p><b>" . htmlspecialchars($row['name']) . "</b> - " . htmlspecialchars($row['email']) . "</p>";
}
echo "</div>
</div>
</body>
</html>";
?>
