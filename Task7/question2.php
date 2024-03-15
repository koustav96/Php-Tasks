<?php

session_start();
if (!isset($_SESSION["user_name"])) {
    header("location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <link rel="stylesheet" href="css/q.css">
</head>

<body>
    <div class="container">
        <h1>Question 2</h1>
        <p>Add a new field to accept user image in addition to the above fields. On submit store the image in the backend and display it with the full name below it.</p>
        <div class="button">
            <a href="homepage.php">HomePage</a>
            <a href="logout.php">Log Out</a>
        </div>
    </div>
</body>
</html>
