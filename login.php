<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user_name'] = $_POST['email'];
    $_SESSION['user_role'] = 'admin'; // Change to 'admin' manually for testing
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post">
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <a href="registration.php" class="btn btn-link">Register</a>
    </div>
</body>
</html>
