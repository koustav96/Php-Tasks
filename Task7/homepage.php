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

        <?php if (isset($_SESSION["user_name"])) { ?>
            <div class="buttons">
                <a href="q_1.php">Question 1</a>
                <a href="q_2.php">Question 2</a>
                <a href="q_3.php">Question 3</a>
                <a href="q_4.php">Question 4</a>
                <a href="q_5.php">Question 5</a>
                <a href="q_6.php">Question 6</a>
            </div>
        <?php } else {
            // If session is not present, redirect to login.php.
            header("location: login.php");
            exit();
        }
        ?>
        <div class="button">
            <a href="logout.php">Log Out</a>
        </div>
    </div>
</body>

</html>