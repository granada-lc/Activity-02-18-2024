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
    <title>Edit Profile</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Edit Profile</h2>
        <form method="post">
            <input type="text" name="name" value="<?php echo $_SESSION['user_name']; ?>" required>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</body>
</html>
