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
    <title>Upload Files</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 shadow-lg">
            <h2 class="text-center text-success">Upload Files</h2>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="file" name="file" class="form-control">
                </div>
                <button type="submit" class="btn btn-success w-100">Upload</button>
            </form>
        </div>
    </div>
</body>
</html>
