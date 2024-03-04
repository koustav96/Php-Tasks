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
    <title>Question 1</title>
    <link rel="stylesheet" href="css/q.css">
</head>
<body>
    <div class="container">
        <h1>Question 1</h1>
    <h1>Create a Form with below Fields.</h1>
    <ul>
        <li>First Name - <b>User will input only alphabets</b></li>
        <li>Last Name - <b>User will input only alphabets</b></li>
        <li>Full Name - User cannot enter a value in Full name field. It will be disabled by default. When the first name and last name fields are filled, this field outputs the sum of the above 2 fields.</li>
        <li>Submit Button</li>
            <ul>
                <li>On submit, the form gets submitted and the page will reload</li>
                <li>Hello [full-name]” will appear on the page</li>
            </ul>
    </ul>
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
