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
        <?php if (isset($_SESSION["user_name"])) : ?>
            <div class="button">
                <button onclick="location.href='homepage.php'">HomePage</button>
            </div>
        <?php else : ?>
        <?php
            // If session is not present, redirect to login.php.
            header("location: login.php");
            exit();
        endif;
        ?>
        <div class="button">
            <a href="logout.php">Log Out</a>
        </div>
    </div>
</body>

</html>