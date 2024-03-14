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
    <title>Question 5</title>
    <link rel="stylesheet" href="css/q.css">
</head>

<body>
    <div class="container">
        <h1>Question 5</h1>
        <p>Add a new single text field to the above form that will accept email id. Do not use email id input field type.</p>

        <div class="button">
            <a href="homepage.php">HomePage</a>
            <a href="logout.php">Log Out</a>
        </div>
    </div>
</body>
</html>
