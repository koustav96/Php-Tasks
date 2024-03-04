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
    <title>Question 6</title>
    <link rel="stylesheet" href="css/q.css">
</head>
<body>
    <div class="container">
    <h1>Question 5</h1>
    <p>When the user submits the above form, 2 copies of the data will get created in a doc format. One will store on the server and the other will be downloaded to the user submitting the data. The information in the doc should be presented in a well-defined manner.</p>

    <?php if (isset($_SESSION["user_name"])) : ?>
            <div class="button">
                <button onclick="location.href='homepage.php'">HomePage</button>
            </div>
        <?php else : ?>
            <?php
                // If session is not present, redirect to login.php
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
