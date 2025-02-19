<?php
session_start();
if (!isset($_SESSION['user_name']) || $_SESSION['user_role'] != 'admin') {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Users (Admin)</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Users List</h2>
        <table class="table table-bordered">
            <tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th></tr>
            <tr><td>1</td><td>Admin User</td><td>admin@example.com</td><td>Admin</td></tr>
            <tr><td>2</td><td>Regular User</td><td>user@example.com</td><td>User</td></tr>
        </table>
    </div>
</body>
</html>
