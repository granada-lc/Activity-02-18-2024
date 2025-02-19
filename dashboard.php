<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['user_name']; ?></h2>
        <a href="upload_files.php" class="btn btn-info"> Upload Files</a> 
        <a href="edit_profile.php" class="btn btn-warning"> Edit Profile</a>
        <a href="users_page.php" class="btn btn-primary">Users (Admin Only)</a>
        <a href="logout.php" class="btn btn-danger"> Logout</a>
    </div>
</body>
</html>
