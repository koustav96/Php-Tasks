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
    <title>Question 3</title>
    <link rel="stylesheet" href="css/q.css">
</head>

<body>
    <div class="container">
        <h1>Question 3</h1>
        <p> Add a text area to the above form and accept marks of different subjects in the format, English|80. One subject in each line. Once values entered and submitted, accept them to display the values in the form of a table.</p>
        <div class="button">
            <a href="homepage.php">HomePage</a>
            <a href="logout.php">Log Out</a>
        </div>
    </div>
</body>
</html>
