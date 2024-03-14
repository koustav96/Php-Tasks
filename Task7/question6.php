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
        <h1>Question 6</h1>
        <p>When the user submits the above form, 2 copies of the data will get created in a doc format. One will store on the server and the other will be downloaded to the user submitting the data. The information in the doc should be presented in a well-defined manner.</p>

        <div class="button">
            <a href="homepage.php">HomePage</a>
            <a href="logout.php">Log Out</a>
        </div>
    </div>
</body>
</html>
