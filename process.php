<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Validation
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }

    if (empty($password) || strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    // Display Results
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Form Results</title>
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='d-flex flex-column min-vh-100 bg-light'>
      <div class='container my-5 flex-grow-1'>";

    if (!empty($errors)) {
        echo "<div class='alert alert-danger'><ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul></div>";
        echo "<a href='registration.html' class='btn btn-secondary'>Go Back</a>";
    } else {
        echo "<div class='alert alert-success'>
                <h4>Registration Successful 🎉</h4>
                <p>Welcome, <b>" . htmlspecialchars($name) . "</b></p>
                <p>Your email: <b>" . htmlspecialchars($email) . "</b></p>
              </div>";
        echo "<a href='index.html' class='btn btn-primary'>Go to Home</a>";
    }

    echo "</div>
    <footer class='bg-dark text-white text-center py-3 mt-auto'>
      © " . date("Y") . " Vedant Kulkarni | All Rights Reserved
    </footer>
    </body>
    </html>";
}
?>
