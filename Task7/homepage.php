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
    <title>HomePage</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1><?php echo "Hello " . strtoupper($_SESSION["user_name"]); ?></h1>

        <div class="buttons">
            <a href="question1.php">Question 1</a>
            <a href="question2.php">Question 2</a>
            <a href="question3.php">Question 3</a>
            <a href="question4.php">Question 4</a>
            <a href="question5.php">Question 5</a>
            <a href="question6.php">Question 6</a>
            <a href="logout.php">Log Out</a>
        </div>
    </div>
</body>
</html>
